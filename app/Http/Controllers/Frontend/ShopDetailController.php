<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class ShopDetailController extends Controller
{
    public function index(){
        return view("shop-detail",['title' => 'Web Top up | Detail']);
    }
}