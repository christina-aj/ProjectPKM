<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class UserController extends Controller
{
    public function index(){
        return view("user",['title' => 'Web Top up | Profile']);
    }
}