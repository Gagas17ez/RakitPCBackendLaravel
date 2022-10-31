<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keyboard;

class KeyboardController extends Controller
{
    public function getKeyboard(){
        $hasil = keyboard::all();
        return $hasil;
    }

    public function getKeyboardID($id){
        $hasil =  keyboard::select("*")
                        ->where('idKeyboard', $id)
                        ->get();
        return $hasil;
    }

    public function PostKeyboardFilter(Request $Request){
        if ($Request->Request == "AZ"){
            $Return = keyboard::select("*")
                        ->orderBy("NamaKeyboard")
                        ->get();
          }
          elseif ($Request->Request == "ZA") {
            $Return = keyboard::select("*")
                        ->orderByDesc("NamaKeyboard")
                        ->get();
          }
          elseif ($Request->Request == "Murah") {
            $Return = keyboard::select("*")
                        ->orderBy("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mahal") {
            $Return = keyboard::select("*")
                        ->orderByDesc("Harga")
                        ->get();
          }
          elseif ($Request->Request == "Mechanical") {
            $Return = keyboard::select("*")
                        ->where('Mechanical','like','%yes%')
                        ->get();
         }
         elseif ($Request->Request == "Blue") {
            $Return = keyboard::select("*")
                        ->where('SwitchType','like','%blue%')
                        ->get();
         }
         elseif ($Request->Request == "Brown") {
            $Return = keyboard::select("*")
                        ->where('SwitchType','like','%brown%')
                        ->get();
         }
         elseif ($Request->Request == "Red") {
            $Return = keyboard::select("*")
                        ->where('SwitchType','like','%red%')
                        ->get();
         }
         elseif ($Request->Request == "RGB") {
            $Return = keyboard::select("*")
                        ->where('RGB','like','%yes%')
                        ->get();
         }
         elseif ($Request->Request == "Wireless") {
            $Return = keyboard::select("*")
                        ->where('Wireless','like','%yes%')
                        ->get();
         }
         elseif ($Request->Request == "Full") {
            $Return = keyboard::select("*")
                        ->where('KeyboardType','like','%full%')
                        ->get();
         }
         elseif ($Request->Request == "TKL") {
            $Return = keyboard::select("*")
                        ->where('KeyboardType','like','%tenkey%')
                        ->get();
         }
         elseif ($Request->Request == "80") {
            $Return = keyboard::select("*")
                        ->where('KeyboardType','like','%80%')
                        ->get();
         }
         elseif ($Request->Request == "65") {
            $Return = keyboard::select("*")
                        ->where('KeyboardType','like','%65%')
                        ->get();
         }
         else {
            $Return = keyboard::all();
         }
          return $Return;
    }
}
