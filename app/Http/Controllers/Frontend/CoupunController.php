<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class CoupunController extends Controller
{
    public function index(){
        return view("voucher",['title' => 'Web Top up | voucher']);;
    }
}