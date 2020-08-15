<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    return "หน้า user";
    }

    public function contact(){
        return "สร้าง user" ;
    }
    public function shouldName($Name){
        return "สวัสดี Name";
    }
    public function shouldNameAge($Name,$age){
        return "สวัสดี $Name อายุ $age";
    }
}


