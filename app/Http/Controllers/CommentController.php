<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
 
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    function postSaveComment(Request $request)
    {
      $IdPengcomment = $request->input('IdPengcomment');
      $NamaPengcomment = $request->input('NamaPengcomment');
      $IsiComment = $request->input('IsiComment');
      $like = 0;
      
      DB::table('comment')->insert([
            'IdPengcomment'=> $IdPengcomment,
            'NamaPengcomment'=> $NamaPengcomment ,
            'IsiComment'=> $IsiComment,
            'like' => $like,
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]); 
    }

    function getCommentAll()
    {
      $res =  DB::table('comment')->get();  
      return Response::json($res);
    }

    function getCommentID($id)
    {
      $res = DB::table('comment')->where('IdComment', $id)->get();
      return Response::json($res);
    }

    function getDeleteCommentID($id)
    {
      $res = DB::table('comment')->where('IdComment', $id)->delete();
      return Response::json($res);
    }
}
