<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class InvoiceController extends Controller
{
    public function index(){
        return view("invoice",['title' => 'Web Top up | invoice']);
    }
}