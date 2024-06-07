<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login",['title' => 'Web Top up | Login']);
    }
}