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
            'HargaTotal' => 'required|max:200',
            'IdCasing' => 'required|max:200',
            'HargaCasing' => 'required|max:200',
            'IdCpu' => 'required|max:200',
            'HargaCpu' => 'required|max:200',
            'IdCpuCooler' => 'required|max:200',
            'HargaCpuCooler' => 'required|max:200',
            'IdMotherboard' => 'required|max:200',
            'HargaMotherboard' => 'required|max:200',
            'IdPsu' => 'required|max:200',
            'HargaPsu' => 'required|max:200',
            'IdRam1' => 'required|max:200',
            'HargaRam1' => 'required|max:200',
            'IdRam2' => 'required|max:200',
            'HargaRam2' => 'required|max:200',
            'IdStorage1' => 'required|max:200',
            'HargaStorage1' => 'required|max:200',
            'IdStorage2' => 'required|max:200',
            'HargaStorage2' => 'required|max:200',
            'IdVga' => 'required|max:200',
            'HargaVga' => 'required|max:200',
            'IdFan1' => 'required|max:200',
            'HargaFan1' => 'required|max:200',
            'IdFan2' => 'required|max:200',
            'HargaFan2' => 'required|max:200',
            'IdFan3' => 'required|max:200',
            'HargaFan3' => 'required|max:200'
        ]);

        $datesaiki = date('Y-m-d H:i:s');
        $simpanBuild = new simpanBuild;
        
        $simpanBuild->NamaBuild = $datesaiki;
        $simpanBuild->IdUser = $request->IdUser;
        $simpanBuild->Compatible = $request->Compatible;
        $simpanBuild->HargaTotal = $request->HargaTotal;
        $simpanBuild->IdCasing = $request->IdCasing;
        $simpanBuild->HargaCasing = $request->HargaCasing;
        $simpanBuild->IdCpu = $request->IdCpu;
        $simpanBuild->HargaCpu = $request->HargaCpu;
        $simpanBuild->IdCpuCooler = $request->IdCpuCooler;
        $simpanBuild->HargaCpuCooler = $request->HargaCpuCooler;
        $simpanBuild->IdMotherboard = $request->IdMotherboard;
        $simpanBuild->HargaMotherboard = $request->HargaMotherboard;
        $simpanBuild->IdPsu = $request->IdPsu;
        $simpanBuild->HargaPsu = $request->HargaPsu;
        $simpanBuild->IdRam1 = $request->IdRam1;
        $simpanBuild->HargaRam1 = $request->HargaRam1;
        $simpanBuild->IdRam2 = $request->IdRam2;
        $simpanBuild->HargaRam2 = $request->HargaRam2;
        $simpanBuild->IdStorage1 = $request->IdStorage1;
        $simpanBuild->HargaStorage1 = $request->HargaStorage1;
        $simpanBuild->IdStorage2 = $request->IdStorage2;
        $simpanBuild->HargaStorage2 = $request->HargaStorage2;
        $simpanBuild->IdVga = $request->IdVga;
        $simpanBuild->HargaVga = $request->HargaVga;
        $simpanBuild->IdFan1 = $request->IdFan1;
        $simpanBuild->HargaFan1 = $request->HargaFan1;
        $simpanBuild->IdFan2 = $request->IdFan2;
        $simpanBuild->HargaFan2 = $request->HargaFan2;
        $simpanBuild->IdFan3 = $request->IdFan3;
        $simpanBuild->HargaFan3= $request->HargaFan3;
        $simpanBuild->created_at = $datesaiki;
        $simpanBuild->updated_at = $datesaiki;
        $hasil = $simpanBuild->save();
        return $hasil;
    }
        
    public function getBuildID($IdUser){
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
