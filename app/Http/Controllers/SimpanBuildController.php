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
        
        $datesaiki = date('Y-m-d H:i:s');
        $simpanBuild = new simpanBuild;
        
        $simpanBuild->NamaBuild = $datesaiki;
        $simpanBuild->IdUser = $request->post('IdUser');
        $simpanBuild->Compatible = $request->post('Compatible');
        $simpanBuild->HargaTotal = $request->post('HargaTotal');
        $simpanBuild->IdCasing = $request->post('IdCasing');
        $simpanBuild->HargaCasing = $request->post('HargaCasing');
        $simpanBuild->IdCpu = $request->post('IdCpu');
        $simpanBuild->HargaCpu = $request->post('HargaCpu');
        $simpanBuild->IdCpuCooler = $request->post('IdCpuCooler');
        $simpanBuild->HargaCpuCooler = $request->post('HargaCpuCooler');
        $simpanBuild->IdMotherboard = $request->post('IdMotherboard');
        $simpanBuild->HargaMotherboard = $request->post('HargaMotherboard');
        $simpanBuild->IdPsu = $request->post('IdPsu');
        $simpanBuild->HargaPsu = $request->post('HargaPsu');
        $simpanBuild->IdRam1 = $request->post('IdRam1');
        $simpanBuild->HargaRam1 = $request->post('HargaRam1');
        $simpanBuild->IdRam2 = $request->post('IdRam2');
        $simpanBuild->HargaRam2 = $request->post('HargaRam2');
        $simpanBuild->IdStorage1 = $request->post('IdStorage1');
        $simpanBuild->HargaStorage1 = $request->post('HargaStorage1');
        $simpanBuild->IdStorage2 = $request->post('IdStorage2');
        $simpanBuild->HargaStorage2 = $request->post('HargaStorage2');
        $simpanBuild->IdVga = $request->post('IdVga');
        $simpanBuild->HargaVga = $request->post('HargaVga');
        $simpanBuild->IdFan1 = $request->post('IdFan1');
        $simpanBuild->HargaFan1 = $request->post('HargaFan1');
        $simpanBuild->IdFan2 = $request->post('IdFan2');
        $simpanBuild->HargaFan2 = $request->post('HargaFan2');
        $simpanBuild->IdFan3 = $request->post('IdFan3');
        $simpanBuild->HargaFan3= $request->post('HargaFan3');
        $simpanBuild->created_at = $datesaiki;
        $simpanBuild->updated_at = $datesaiki;
        $hasil = $simpanBuild->save();
        return $hasil;
    }
        
    public function getBuildIDUser($IdUser){
        $hasil =  simpanBuild::select("*")
                        ->where('idUser', $IdUser)
                        ->get();
        return $hasil;
    }

    public function getBuildIDBuild($IdBuild){
        $hasil =  simpanBuild::select("*")
                        ->where('IdSimpan', $IdBuild)
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
