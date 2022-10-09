<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storage;

class StorageController extends Controller
{
    public function getStorage(){
        $hasil = storage::all();
        return $hasil;
    }

    public function getStorageID($id){
        $hasil =  storage::select("*")
                        ->where('idStorage', $id)
                        ->get();
        return $hasil;
    }

    public function PostStorageFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = storage::select("*")
                        ->orderBy("NamaStorage")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = storage::select("*")
                        ->orderByDesc("NamaStorage")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = storage::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif (($Request->Request) == "SSD") {
            $Return = storage::select("*")
                        ->where('TypeStorage','like','%ssd%')
                        ->get(); 
          }
          elseif (($Request->Request) == "HDD") {
            $Return = storage::select("*")
                        ->where('TypeStorage','like','%hdd%')
                        ->get(); 
          }
          elseif (($Request->Request) == "NVME") {
            $Return = storage::select("*")
                        ->where('TypeStorage','like','%nvme%')
                        ->get(); 
          }
          elseif ($Request->Request == "CapacityTinggi") {
            $Return = storage::select("*")
                        ->orderByDesc("StorageCapacity")
                        ->get();
          }
          elseif ($Request->Request == "CapacityRendah") {
            $Return = storage::select("*")
                        ->orderBy("StorageCapacity")
                        ->get();
          }
          elseif ($Request->Request == "ReadSpeed") {
            $Return = storage::select("*")
                        ->orderByDesc("ReadSpeed")
                        ->get();
          }
          elseif ($Request->Request == "WriteSpeed") {
            $Return = storage::select("*")
                        ->orderByDesc("WriteSpeed")
                        ->get();
          }else {
            $hasil = storage::all();
          }
          return $Return;
    }
}
