<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationMail;
use App\Mail\ValidateMail;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\Notification;
use App\Models\Product;
use App\Models\ProductCatalog;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\State;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
  public function addcustomer(Request $request)
  {

    $ValidateData = Validator::make($request->all(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'phone_number' => 'required|numeric|unique:customers,phone_number|digits:10',
      'passcode' => 'required|digits:6',
      'password' => 'required',
      'gender' => 'required',
      'dob' => 'required',
      'address_1' => 'required',
      'state_id' => 'required',
      'postal_code' => 'required',
      'role_type' => 'required',
      'question' => 'required',
      'answer' => 'required',
    ]);

    if ($ValidateData->fails()) {
      $message = $ValidateData->errors();
      return response()->json(responseData(null, $message, false));
    } else {

      $role_id = Role::where('role_name', $request->role_type)->first();
      $fullPath = null;
      if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->extension();
        if (!File::exists("images/profilepicture")) {
          File::makeDirectory("images/profilepicture");
        }
        $request->image->move(public_path('images/profilepicture'), $imageName);
        $fullPath = 'images/profilepicture/' . $imageName;
      }
      //$state = State::where('district', $request->state_id)->first();
      DB::beginTransaction();
      try {
        $entity = new Customer();

        $entity->first_name = $request->first_name;
        $entity->last_name = $request->last_name;
        $entity->email_id = $request->email_id;
        $entity->phone_number = $request->phone_number;
        $entity->passcode = $request->passcode;
        $entity->password = Hash::make($request->password);
        $entity->gender = $request->gender;
        $entity->dob = $request->dob;
        $entity->question = $request->question;
        $entity->answer = $request->answer;
        $entity->new_role_id = $role_id->id;
        if ($fullPath !== null) {
          $entity->image = $fullPath;
        }
        $entity->verify = "false";
        $entity->save();

        if ($entity->save()) {
          $customer = Customer::where('phone_number', $request->phone_number)->first();
          $entity2 = new CustomerAddress();
          $entity2->customer_id = $customer->id;
          $entity2->address_1 = $request->address_1;
          $entity2->address_2 = $request->address_2;
          $entity2->state_id = $request->state_id;
          $entity2->postal_code = $request->postal_code;
          $entity2->save();
        }

        if ($entity2->save()) {
          $id = $entity->id;
          $wallet = new Wallet();
          $wallet->customer_id = $id;
          $wallet->lifetime_credit = "0.00";
          $wallet->lifetime_debit = "0.00";
          $wallet->save();
        }

        if ($wallet->save()) {
          $timestamp = Carbon::now();
          $notification = new Notification();
          $notification->customer_id = $entity->id;
          $notification->message = "you successfully registered";
          $notification->date_time = $timestamp;
          $notification->is_read = "unread";
          $notification->notification_type = "system_gen";
          $notification->save();
        }

        DB::commit();

        if ($request->email_id) {
          $this->registrationMail($request->email_id, $request->phone_number, $request->password, $request->passcode);
        }
        $customer = Customer::select('id', 'phone_number', 'email_id', 'verify')->where('phone_number', $request->phone_number)->first();
        return response()->json(responseData($customer, "Customer added successfully."));
      } catch (Exception $e) {
        DB::rollBack();
        return response()->json(responseData(null, "Customer not added successfully", false));
      }
    }
  }

  public function view()
  {
    $id = auth('sanctum')->user()->id;
    $baseURL = request()->root();
    $customer = customer::with('address.customerstate')->where('id', $id)->first();
    if ($customer->image != null) {
      $customer->image = $baseURL . '/' . $customer->image;
    }else{
      if($customer->gender == 'male'){
        $customer->image = $baseURL . '/assets/images/users/male.jpeg' ;
      }else{
        $customer->image = $baseURL . '/assets/images/users/female.jpeg' ;
      }
    }

    return response()->json(responseData($customer, "customer data retrive"));
  }

  public function customerupdate(Request $request)
  {
    $id = auth('sanctum')->user()->id;
    $imageName = null;
    $validatedData = Validator::make($request->all(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'gender' => 'required',
      'dob' => 'required',
      'address_1' => 'required',
      'state_id' => 'required',
      'postal_code' => 'required',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);


    if ($validatedData->fails()) {
      $message = $validatedData->errors();
      return response()->json(responseData(null, $message, false));
    } else {

      if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->extension();
        if (!File::exists("images/profilepicture")) {
          File::makeDirectory("images/profilepicture");
        }
        $request->image->move(public_path('images/profilepicture'), $imageName);
        $fullPath = 'images/profilepicture/' . $imageName;
      }

      $customer = Customer::where('id', $id)->first();



      $customer->first_name = $request->first_name;
      $customer->last_name = $request->last_name;
      $customer->gender = $request->gender;
      $customer->dob = $request->dob;
      if ($imageName !== null) {
        $customer->image = $imageName ? $fullPath : $customer->image;
      }
      CustomerAddress::where('customer_id', $id)->update([
        'address_1' => $request->address_1,
        'address_2' => $request->address_2,
        'state_id' => $request->state_id,
        'postal_code' => $request->postal_code,
      ]);


      $customer->update($customer->toArray());

      if ($customer->update()) {
        $data = Customer::with('address')->where('id', $id)->first();
        $baseURL = request()->root();
        if ($data) {
          $data->image = $baseURL . '/' . $data->image;
        }
        return response()->json(responseData($data, "Update Successfully"));
      } else {
        return response()->json(responseData(null, "failed", false));
      }
    }
  }

  public function document(Request $request)
  {
    $docimg = null;
    $fullimg = null;
    $id = auth('sanctum')->user()->id;
    $validatedData = Validator::make($request->all(), [
      'doc_type' => 'required',
      'doc_number' => 'required',
      'doc_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    if ($validatedData->fails()) {
      $message = $validatedData->errors();
      return response()->json(responseData(null, $message, false));
    } else {

      if ($request->hasFile('doc_img')) {
        $docimg = time() . '.' . $request->file('doc_img')->extension();
        if (!File::exists("images/docimage")) {
          File::makeDirectory("images/docimage");
        }
        $request->doc_img->move(public_path('images/docimage'), $docimg);
        $fullPath = 'images/docimage/' . $docimg;
      }

      if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->extension();
        if (!File::exists("images/profilepicture")) {
          File::makeDirectory("images/profilepicture");
        }
        $request->image->move(public_path('images/profilepicture'), $imageName);
        $fullimg = 'images/profilepicture/' . $imageName;
      }

      $data = Customer::where('id', $id)->first();
      $data->doc_type = $request->doc_type;
      $data->doc_number = $request->doc_number;
      $data->doc_img = $fullPath;
      if ($fullimg !== null) {
        $data->image = $fullimg;
      }
      $data->verify = 'true';
      $data->update($data->toArray());
      if($data){
        $timestamp = Carbon::now();
        $notification = new Notification();
        $notification->customer_id = $id;
        $notification->message = "your profile validate";
        $notification->date_time = $timestamp;
        $notification->is_read = "unread";
        $notification->notification_type = "system_gen";
        $notification->save();
        if($data->email_id){
          $this->validationMail($data->email_id);
        }
      }
    }

    if ($data) {
      $baseURL = request()->root();
      $customer = Customer::where('id', $request->id)->first();
      if ($customer) {
        $customer->image = $baseURL . '/' . $customer->image;
        $customer->doc_img = $baseURL . '/' . $customer->doc_img;
      }
      return response()->json(responseData($customer, "Document uploded successfully"));
    } else {
      return response()->json(responseData(null, "something went wrong", false));
    }
  }

  public function registrationMail($email, $phone, $password, $passcode)
  {
    $customer = Customer::where('phone_number', $phone)->first();
    $maildata = [
      'title' => "Congratulations! You Have Successfully Registered – Welcome to Presto Plast Reward!",
      'body' => "Dear $customer->first_name,
      Welcome to PrestoRewards! Your registration is complete, and exciting rewards await you. Start redeeming today!
      Mobile: $phone,
      Password: $password,
      Passcode: $passcode,
      Happy redeeming!
      Best Regards,
      The PrestoRewards Team
      "
    ];
    Mail::to($email)->send(new RegistrationMail($maildata));
  }

  public function validationMail($email)
  {
    $customer = Customer::where('email_id',$email)->first();
    $maildata = [
      'title' => "Your Profile Validation is Successful",
      'body' => "Dear $customer->first_name
      <br>
      Congratulations! Your PrestoRewards profile has been successfully verified. Unlock more features and benefits.
      <br>
      Best Regards, <br> The PrestoRewards Team"
    ];
    Mail::to($email)->send(new ValidateMail($maildata));
  }
}
