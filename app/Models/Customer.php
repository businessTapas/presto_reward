<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasFactory,Notifiable,SoftDeletes,HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'email_id',
        'phone_number',
        'passcode',
        'password',
        'gender',
        'dob',
        'new_role_id',
        'question',
        'answer',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
        'image'
        

    ];

    public function address()
    {
        return $this->hasOne(CustomerAddress::class,);
    }

    public function appsetting()
    {
        return $this->hasOne(AppSetting::class,);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class,);
    }
}
