<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mouse;

class MouseController extends Controller
{
    public function getMouse(){
        $hasil = mouse::all();
        return $hasil;
    }

    public function getMouseID($id){
        $hasil =  mouse::select("*")
                        ->where('idMouse', $id)
                        ->get();
        return $hasil;
    }

    public function PostmouseFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = mouse::select("*")
                        ->orderBy("NamaMouse")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = mouse::select("*")
                        ->orderByDesc("NamaMouse")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = mouse::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = mouse::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "DpiTerbanyak") {
            $Return = mouse::select("*")
                        ->orderByDesc("DpiMaxMouse")
                        ->get();
         }
         elseif ($Request->Request == "ButtonTerbanyak") {
            $Return = mouse::select("*")
                        ->orderByDesc("TotalButton")
                        ->get();
         }
         elseif ($Request->Request == "Teringan") {
            $Return = mouse::select("*")
                        ->orderBy("Weight")
                        ->get();
         }
         elseif ($Request->Request == "Wireless") {
            $Return = mouse::select("*")
                        ->where('Wireless','like','%yes%')
                        ->get();
         }
         else {
            $Return = mouse::all();
         }
          return $Return;
    }
}
