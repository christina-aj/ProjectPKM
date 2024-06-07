<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("contact",['title' => 'Web Top up | Contact']);;
    }
}