<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class HistoryController extends Controller
{
    public function index(){
        return view("history",['title' => 'Web Top up | History']);;
    }
}