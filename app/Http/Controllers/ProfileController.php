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
      $IdUser = $request->input('IdUser');
      $NamaUser = $request->input('NamaUser');
      $TipeUser = $request->input('TipeUser');
      $Kelamin = $request->input('Kelamin');
      $Profesi = $request->input('Profesi');
      $ProfilePic_Path = $request->file('ProfilePic_Path')->store('products');
    
      DB::table('profile')->insert([
            'IdUser' =>  $IdUser,
            'NamaUser'=> $NamaUser,
            'TipeUser'=> $TipeUser ,
            'Kelamin'=> $Kelamin,
            'Profesi'=> $Profesi,
            'ProfilePic_Path' => $ProfilePic_Path
          ]); 
    }

    function getProfileAll()
    {
      $res =  DB::table('profile')->get();  
      return Response::json($res);
    }

    function getProfileIdUser($id)
    {
      $res = DB::table('profile')->where('IdUser', $id)->get();
      return Response::json($res);
    }

    function getDeleteProfileID($id)
    {
      $res = DB::table('profile')->where('IdUser', $id)->delete();
      return Response::json($res);
    }
}
