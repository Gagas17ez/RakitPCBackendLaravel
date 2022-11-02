<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use App\Models\simpanBuild;

class simpanBuildController extends Controller
{
    public function postSaveBuild(Request $request)
    {
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
            'IdFan3' => 'required|max:200'
        ]);

        $datesaiki = date('Y-m-d H:i:s');
        $simpanBuild = new simpanBuild;
        
        $simpanBuild->NamaBuild = $datesaiki;
        $simpanBuild->IdUser = $request->IdUser;
        $simpanBuild->Compatible = $request->Compatible;
        $simpanBuild->Harga = $request->Harga;
        $simpanBuild->IdCasing = $request->IdCasing;
        $simpanBuild->IdCpu = $request->IdCpu;
        $simpanBuild->IdCpuCooler = $request->IdCpuCooler;
        $simpanBuild->IdMotherboard = $request->IdMotherboard;
        $simpanBuild->IdPsu = $request->IdPsu;
        $simpanBuild->IdRam1 = $request->IdRam1;
        $simpanBuild->IdRam2 = $request->IdRam2;
        $simpanBuild->IdStorage1 = $request->IdStorage1;
        $simpanBuild->IdStorage2 = $request->IdStorage2;
        $simpanBuild->IdVga = $request->IdVga;
        $simpanBuild->IdFan1 = $request->IdFan1;
        $simpanBuild->IdFan2 = $request->IdFan2;
        $simpanBuild->IdFan3 = $request->IdFan3;
        $hasil = $simpanBuild->save();
        return $hasil;
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
