<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PowerSupply;


class PowerSupplyController extends Controller
{
    public function getPowerSupply(){
        $hasil = powerSupply::all();
        return $hasil;
    }

    public function getPowerSupplyID($id){
        $hasil =  powerSupply::select("*")
                        ->where('idPSU', $id)
                        ->get();
        return $hasil;
    }

    public function PostPowerSupplyFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = powerSupply::select("*")
                        ->orderBy("NamaPSU")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = powerSupply::select("*")
                        ->orderByDesc("NamaPSU")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = powerSupply::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = powerSupply::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "WattTinggi") {
            $Return = powerSupply::select("*")
                        ->orderByDesc("WattPSU")
                        ->get();
          }
          elseif ($Request->Request == "WattRendah") {
            $Return = powerSupply::select("*")
                        ->orderBy("WattPSU")
                        ->get();
          }
          elseif ($Request->Request == "White") {
            $Return = powerSupply::select("*")
                        ->where('80PlusEfficient','like','%white%')
                        ->get(); 
          }
          elseif ($Request->Request == "Gold") {
            $Return = powerSupply::select("*")
                        ->where('80PlusEfficient','like','%gold%')
                        ->get(); 
          }
          elseif ($Request->Request == "Bronze") {
            $Return = powerSupply::select("*")
                        ->where('80PlusEfficient','like','%bronze%')
                        ->get(); 
          }
          elseif ($Request->Request == "Modular") {
            $Return = powerSupply::select("*")
                        ->where('Modular','like','%modular%')
                        ->get(); 
          }
          elseif ($Request->Request == "NonModular") {
            $Return = powerSupply::select("*")
                        ->where('Modular','like','%No%')
                        ->get(); 
          }
         
          return $Return;
    }
}
