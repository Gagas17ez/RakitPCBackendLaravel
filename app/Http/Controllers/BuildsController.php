<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\builds;

class BuildsController extends Controller
{
    public function getBuilds(){
        $hasil = builds::all();
        return $hasil;
    }

    public function getBuildsID($id){
        $hasil =  builds::select("*")
                        ->where('idBuilds', $id)
                        ->get();
        return $hasil;
    }

    public function getBuildsDetail(Request $Request){
        $hasil =  builds::select("*")
                        ->where('KebutuhanBuilds', $Request->Kebutuhan)
                        ->where('BudgetBuilds', $Request->Budget)
                        ->where('KebutuhanStorage', $Request->Storage)
                        ->get();
        return $hasil;
    }
    
}
