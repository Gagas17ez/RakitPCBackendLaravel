<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motherboard;

class MotherboardController extends Controller
{
    public function getMobo(){
        $hasil = motherboard::all();
        return $hasil;
    }

    public function getMoboID($id){
        $hasil =  motherboard::select("*")
                        ->where('idMotherboard', $id)
                        ->get();
        return $hasil;
    }

    public function PostMoboFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = motherboard::select("*")
                        ->orderBy("NamaMobo")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = motherboard::select("*")
                        ->orderByDesc("NamaMobo")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = motherboard::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = motherboard::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "AMD") {
            $Return = motherboard::select("*")
                        ->where('SocketMobo','like','%AM%')
                        ->get(); 
        }
        elseif ($Request->Request == "Intel") {
            $Return = motherboard::select("*")
                        ->where('SocketMobo','like','%LGA%')
                        ->get(); 
        }
        elseif ($Request->Request == "NVME") {
            $Return = motherboard::select("*")
                        ->where('M2Slot','like','%x%')
                        ->get(); 
        }
        elseif ($Request->Request == "ATX") {
            $Return = motherboard::select("*")
                        ->where('FormFactor','like','%ATX%')
                        ->get(); 
        }
        elseif ($Request->Request == "Micro") {
            $Return = motherboard::select("*")
            ->where('FormFactor','like','%Micro%')
            ->get(); 
        }
        elseif ($Request->Request == "Mini") {
            $Return = motherboard::select("*")
            ->where('FormFactor','like','%Mini%')
            ->get(); 
        }
        else {
            $hasil = motherboard::all();
        }
         
          return $Return;
    }
}
