<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Models\profile;
use App\Gambar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 

class ProfileController extends Controller
{
    function postSaveProfile(Request $request)
    {
      $request->validate([
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

    function postUpdateProfile(Request $request){
      $request->validate([
        'IdUser' => 'required|max:200',
        'NamaUser' => 'required|max:800',
        'TipeUser' => 'required|max:200',
        'Kelamin' => 'required|max:200',
        'Profesi' => 'required|max:200',
        'ProfilePic_Path' => 'required'
      ]);

      $gambar = profile::select("ProfilePic_Path")
                        ->where('IdUser', $request->IdUser)
                        ->first();

      \File::delete(public_path($gambar->ProfilePic_Path));

      $check = $request->file('ProfilePic_Path');
      
      if ($check == 0){
        $request->ProfilePic_Path = "0";
      }else {
        $request->ProfilePic_Path = $request->file('ProfilePic_Path')->store('products');
      }

      $hasil = profile::where('IdUser', $request->IdUser)->update([
        'NamaUser'=> $request->NamaUser,
        'TipeUser'=> $request->TipeUser,
        'Kelamin'=> $request->Kelamin,
        'Profesi'=> $request->Profesi,
        'ProfilePic_Path'=> $request->ProfilePic_Path,
      ]);
      
      if ($hasil) {
        return response($hasil,200);
      }else {
        return response($hasil,400);
      }
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
