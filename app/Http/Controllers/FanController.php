<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fan;

class FanController extends Controller
{
    public function getFan(){
        $hasil = fan::all();
        return $hasil;
    }

    public function getFanID($id){
        $hasil =  fan::select("*")
                        ->where('idFans', $id)
                        ->get();
        return $hasil;
    }

    public function PostFanFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = fan::select("*")
                        ->orderBy("NamaFans")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = fan::select("*")
                        ->orderByDesc("NamaFans")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = fan::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "Mahal") {
            $Return = fan::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
         
          return $Return;
    }
    
}
