<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SettingsPages;
use Illuminate\Http\Request;

class SettingPageController extends Controller
{
    public function index()
    {
    $data=SettingsPages::all();
    return response()->json(responseData($data,"Acess successful"));
}
}

