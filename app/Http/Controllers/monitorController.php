<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitor;

class monitorController extends Controller
{
    public function getMonitor(){
        $hasil = monitor::all();
        return $hasil;
    }

    public function getMonitorID($id){
        $hasil =  monitor::select("*")
                        ->where('idMonitor', $id)
                        ->get();
        return $hasil;
    }

    public function PostMonitorFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = monitor::select("*")
                        ->orderBy("NamaMonitor")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = monitor::select("*")
                        ->orderByDesc("NamaMonitor")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = monitor::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = monitor::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "1080p") {
            $Return = monitor::select("*")
                        ->where('MonitorResolusi','like','%1080%')
                        ->get();
         }
         elseif ($Request->Request == "1440p") {
            $Return = monitor::select("*")
                        ->where('MonitorResolusi','like','%1440%')
                        ->get();
         }
         elseif ($Request->Request == "2160p") {
            $Return = monitor::select("*")
                        ->where('MonitorResolusi','like','%2160%')
                        ->get();
         }
       
        else {
            $hasil = monitor::all();
        }
         
          return $Return;
    }
}
