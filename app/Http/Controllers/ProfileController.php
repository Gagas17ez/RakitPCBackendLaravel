<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use App\Models\profile;

class ProfileController extends Controller
{
    function postSaveProfile(Request $request)
    {
      $this->validate($request, [
        'IdUser' => 'required|max:200',
        'NamaUser' => 'required|max:800',
        'TipeUser' => 'required|max:200',
        'Kelamin' => 'required|max:200',
        'Profesi' => 'required|max:200',
        'ProfilePic_Path' => 'required'
      ]);

      $profile = new profile();
      $profile->IdUser = $request->IdUser;
      $profile->NamaUser = $request->NamaUser;
      $profile->TipeUser = $request->TipeUser;
      $profile->Kelamin = $request->Kelamin;
      $profile->Profesi = $request->Profesi;
      
      $check = $request->file('ProfilePic_Path');
      if ($check == 0){
        $profile->ProfilePic_Path = "0";
      }else {
        $profile->ProfilePic_Path = $request->file('ProfilePic_Path')->store('products');
      }
      $hasil = $profile->save();
      return $hasil;
    }

    function getCheckDuweProfile($id){
      if (profile::where('IdUser', $id)->exists()) {
        return 1;
      }else{
        return 0;
      }
    }

    function getProfileAll()
    {
      $hasil =  profile::all();
      return $hasil;
    }

    function getProfileIdUser($id)
    {
      $hasil =  profile::select("*")
                        ->where('IdUser', $id)
                        ->get();
      return $hasil;
    }

    function getDeleteProfileID($id)
    {
       $hasil =  profile::select("*")
                        ->where('IdUser', $id)
                        ->delete();
      return $hasil;
    }
}
