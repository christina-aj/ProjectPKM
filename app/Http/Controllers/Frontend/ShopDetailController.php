<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopDetailController extends Controller
{
    public function index(Request $request){

        $provider = DB::select('select * from m_provider where provider_id = ?', [$request->provider_id]);
        if(count($provider) > 0){
            $provider = $provider[0];
        }
       
        $nominal_pulsas = DB::select('select * from m_nominal_pulsa');

        $pulsas = DB::select('select * from m_pulsa');

        // $pulsas = DB::select('select * from m_pulsa where pulsa_id = ?', [$request->pulsa_id]);
        // if(count($pulsas) > 0){
        //     $pulsa = $pulsa[0];
        // }

        $data['title'] = 'Web Top up | Detail';
        $data['provider'] = $provider;
        $data['nominal_pulsas'] = $nominal_pulsas;
        $data['pulsas'] = $pulsas;

        return view("shop-detail",$data);
    }

    
}