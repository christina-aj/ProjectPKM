<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home",['title' => 'Web Top up | Home']);
    }
}