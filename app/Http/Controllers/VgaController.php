<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vga;

class VgaController extends Controller
{
    public function getVga(){
        $hasil = Vga::all();
        return $hasil;
    }

    public function getVgaID($id){
        $hasil =  Vga::select("*")
                        ->where('idVga', $id)
                        ->get();
        return $hasil;
    }

    public function PostVgaFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = vga::select("*")
                        ->orderBy("NamaVga")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = vga::select("*")
                        ->orderByDesc("NamaVga")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = vga::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "AMD") {
            $Return = vga::select("*")
                        ->where('Generation','like','%AMD%')
                        ->get(); 
          }
          elseif ($Request->Request == "NVIDIA") {
            $Return = vga::select("*")
                        ->where('NamaVga','like','%tx%')
                        ->get(); 
          }
          elseif ($Request->Request == "RTX") {
            $Return = vga::select("*")
                        ->where('RTcores','like','%0%')
                        ->get(); 
          }
          else {
            $Return = vga::all();
          }
          return $Return;
    }
}
