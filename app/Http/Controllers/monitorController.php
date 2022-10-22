<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitor;

class MonitorController extends Controller
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
         elseif ($Request->Request == "HertzTinggi") {
          $Return = monitor::select("*")
                      ->orderByDesc("MonitorRefreshRate")
                      ->get();
         }
         elseif ($Request->Request == "HertzRendah") {
          $Return = monitor::select("*")
                      ->orderBy("MonitorRefreshRate")
                      ->get();
         }
         elseif ($Request->Request == "Ultrawide") {
          $Return = monitor::select("*")
                        ->where('Ultrawide','like','%yes%')
                        ->get();
         }
         elseif ($Request->Request == "HDR") {
          $Return = monitor::select("*")
                        ->where('HDR','like','%hdr%')
                        ->get();
         }
         elseif ($Request->Request == "FreeSync") {
          $Return = monitor::select("*")
                        ->where('ScreenTechnology','like','%free%')
                        ->get();
         }
         elseif ($Request->Request == "GSYNC") {
          $Return = monitor::select("*")
                        ->where('ScreenTechnology','like','%g-sync%')
                        ->get();
         }
         else {
            $Return = monitor::all();
         }
          return $Return;
    }
}
