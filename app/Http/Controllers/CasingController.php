<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\casing;

class CasingController extends Controller
{
    public function getCasing(){
        $hasil = casing::all();
        return $hasil;
    }

    public function showCasingID($id){
        $hasil =  casing::select("*")
                        ->where('idCasing', $id)
                        ->get();
        return $hasil;
    }

    public function getCasingDetail(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = casing::select("*")
                        ->orderBy("NamaCasing")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = casing::select("*")
                        ->orderByDesc("NamaCasing")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = casing::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = casing::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "ATX") {
            $Return = casing::select("*")
                        ->where('MoboCompatible','like','%ATX%')
                        ->get();
          }
          elseif ($Request->Request == "Mini") {
            $Return = casing::select("*")
                        ->where('MoboCompatible','like','%mini%')
                        ->get();
          }
          elseif ($Request->Request == "Micro") {
            $Return = casing::select("*")
                        ->where('MoboCompatible','like','%micro%')
                        ->get();
          }else{
            $Return = casing::all()
                        -> get();
          }
        return $Return;
    }
    //
}
