<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cpu;

class CpuController extends Controller
{
    public function getCpu(){
        $hasil = cpu::all();
        return $hasil;
    }

    public function getCpuID($id){
        $hasil =  cpu::select("*")
                        ->where('idCpu', $id)
                        ->get();
        return $hasil;
    }

    public function PostCpuFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = cpu::select("*")
                        ->orderBy("NamaCpu")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = cpu::select("*")
                        ->orderByDesc("NamaCpu")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = cpu::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "Mahal") {
            $Return = cpu::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Core") {
            $Return = cpu::select("*")
                        ->orderByDesc("CoreCount")
                        ->get();
          }
          elseif ($Request->Request == "Boost") {
            $Return = cpu::select("*")
                        ->orderByDesc("MaxClock")
                        ->get();
          }
          elseif ($Request->Request == "Efisien") {
             $Return = cpu::select("*")
                        ->orderBy("DefaultTDP")
                        ->get();
          }
          elseif ($Request->Request == "Unlocked") {
            $Return = casing::select("*")
                        ->where('Unlocked','like','%yes%')
                        ->get();
          }
          else {
            return cpu::all();
          }
          return $Return;
    }
}
