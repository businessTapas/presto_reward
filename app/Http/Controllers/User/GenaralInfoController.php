<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\Media_file;
use App\Models\Role;
use App\Models\SettingApp;
use App\Models\UserType;
use Illuminate\Http\Request;

class GenaralInfoController extends Controller
{
    public function genaral()
    {
        $baseUrl = request()->root();
        $companyinfo = CompanyInfo::first();
        if ($companyinfo) {
            $companyinfo->company_logo = $baseUrl . '/' . $companyinfo->company_logo;
        }
        $appsetting = SettingApp::first();
        $roles = UserType::with('role')->get();
        $media = Media_file::first();
        if($media){
            $media->welcome_screen = $baseUrl . '/' . $media->media_1;
            $media->slider_1 = $baseUrl . '/' . $media->media_2;
            $media->slider_2 = $baseUrl . '/' . $media->media_3;

            unset($media->media_1);
            unset($media->media_2);
            unset($media->media_3);
        }
        $data=[
            'companyinfo' => $companyinfo,
            'appsetting' => $appsetting,
            'role' => $roles,
            'media' => $media,
        ];

        return response()->json(responseData($data,"data retrive success"));
    }
}
