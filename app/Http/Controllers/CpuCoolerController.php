<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cpuCooler;

class CpuCoolerController extends Controller
{
    public function getCpuCooler(){
        $hasil = cpuCooler::all();
        return $hasil;
    }

    public function getCpuCoolerID($id){
        $hasil =  cpuCooler::select("*")
                        ->where('idCooler', $id)
                        ->get();
        return $hasil;
    }

    public function PostCpuCoolerFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = cpuCooler::select("*")
                        ->orderBy("NamaCooler")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = cpuCooler::select("*")
                        ->orderByDesc("NamaCooler")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = cpuCooler::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "Mahal") {
            $Return = cpuCooler::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Intel") {
            $Return = cpuCooler::select("*")
                        ->where('SocketCooler','like','%LGA%')
                        ->get(); 
         }
         elseif ($Request->Request == "AMD") {
            $Return = cpuCooler::select("*")
                        ->where('SocketCooler','like','%AM%')
                        ->get(); 
         }
         elseif ($Request->Request == "Air") {
            $Return = cpuCooler::select("*")
                        ->where('TypeCooler','like','%Air%')
                        ->get(); 
         }
         elseif ($Request->Request == "Water") {
            $Return = cpuCooler::select("*")
                        ->where('TypeCooler','like','%Liquid%')
                        ->get(); 
         }  
         else {
            $Return = cpuCooler::all();
            
        }
          return $Return;
    }
}
