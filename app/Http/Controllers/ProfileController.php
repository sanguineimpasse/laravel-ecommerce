<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $email = '10jebbys@wup.edu.ph';
        $username = "jebbibs";
        return view('profile')
            ->with("email", $email)
            ->with("username", $username);
    }
}
