<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use App\Models\simpanBuild;

class SimpanBuildController extends Controller
{
    public function postSaveBuild(Request $request){
        $this->validate($request, [
            'IdUser' => 'required|max:200',
            'Compatible' => 'required|max:200',
            'Harga' => 'required|max:200',
            'IdCasing' => 'required|max:200',
            'IdCpu' => 'required|max:200',
            'IdCpuCooler' => 'required|max:200',
            'IdMotherboard' => 'required|max:200',
            'IdPsu' => 'required|max:200',
            'IdRam1' => 'required|max:200',
            'IdRam2' => 'required|max:200',
            'IdStorage1' => 'required|max:200',
            'IdStorage2' => 'required|max:200',
            'IdVga' => 'required|max:200',
            'IdFan1' => 'required|max:200',
            'IdFan2' => 'required|max:200',
            'IdFan3' => 'required|max:200',
        ]);

        $SimpanBuild = new simpanBuild;
        
        $SimpanBuild->IdUser = $request->IdUser;
        $SimpanBuild->Compatible = $request->Compatible;
        $SimpanBuild->Harga = $request->Harga;
        $SimpanBuild->IdCasing = $request->IdCasing;
        $SimpanBuild->IdCpu = $request->IdCpu;
        $SimpanBuild->IdCpuCooler = $request->IdCpuCooler;
        $SimpanBuild->IdMotherboard = $request->IdMotherboard;
        $SimpanBuild->IdPsu = $request->IdPsu;
        $SimpanBuild->IdRam1 = $request->IdRam1;
        $SimpanBuild->IdRam2 = $request->IdRam2;
        $SimpanBuild->IdStorage1 = $request->IdStorage1;
        $SimpanBuild->IdStorage2 = $request->IdStorage2;
        $SimpanBuild->IdVga = $request->IdVga;
        $SimpanBuild->IdFan1 = $request->IdFan1;
        $SimpanBuild->IdFan2 = $request->IdFan2;
        $SimpanBuild->IdFan3 = $request->IdFan3;
        $SimpanBuild->save();
    }
        
    public function getBuildID($IdUser){
        $hasil =  simpanBuild::select("*")
                        ->where('idUser', $IdUser)
                        ->get();
        return $hasil;
    }

    public function getBuildAll(){
        $hasil =  simpanBuild::all();
        return $hasil;
    }

    public function getBuildDelete($IdSimpan){
        $hasil =  simpanBuild::select("*")
                        ->where('IdSimpan', $IdSimpan)
                        ->delete();
        return $hasil;
    }

    public function getBuildDeleteKabehSakUser($IdUser){
        $hasil =  simpanBuild::select("*")
                        ->where('IdUser', $IdUser)
                        ->delete();
        return $hasil;
    }
}
