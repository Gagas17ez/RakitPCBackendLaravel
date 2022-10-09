<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ram;

class RamController extends Controller
{
    public function getRam(){
        $hasil = ram::all();
        return $hasil;
    }

    public function getRamID($id){
        $hasil =  ram::select("*")
                        ->where('idRam', $id)
                        ->get();
        return $hasil;
    }

    public function PostRamFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = ram::select("*")
                        ->orderBy("NamaRam")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = Ram::select("*")
                        ->orderByDesc("NamaRam")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = Ram::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "Mahal") {
            $Return = Ram::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "MemoryTinggi") {
            $Return = Ram::select("*")
                        ->orderByDesc("MemorySize")
                        ->get();
          }
          elseif (($Request->Request) == "MemoryRendah") {
            $Return = Ram::select("*")
                        ->orderBy("MemorySize")
                        ->get();
          }
          elseif (($Request->Request) == "SpeedTinggi") {
            $Return = Ram::select("*")
                        ->orderByDesc("MemorySpeed")
                        ->get();
          }
          elseif (($Request->Request) == "SpeedRendah") {
            $Return = Ram::select("*")
                        ->orderBy("MemorySpeed")
                        ->get();
          }
          return $Return;
    }
}
