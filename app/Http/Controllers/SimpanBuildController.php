<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\simpanBuild;

class SimpanBuildController extends Controller
{
    public function getSimpanID($IdUser){
        $hasil =  simpanBuild::select("*")
                        ->where('idUser', $IdUser)
                        ->get();
        return $hasil;
    }
}
