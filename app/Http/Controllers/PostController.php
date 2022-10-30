<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
 
use Illuminate\Support\Facades\Storage;
 
class PostController extends Controller
{
  
    function postSavePost(Request $request)
    {
      $idPost = $request->input('idPost');
      $JudulPost = $request->input('JudulPost');
      $IsiPost = $request->input('IsiPost');
      $idPengepost = $request->input('IdPengepost');
      $namaPengepost = $request->input('NamaPengepost');
      $like = 0;
      
      $check = $request->file('file');
      if ($check == 0){
        $filepath = "0";
      }else {
        $filepath = $request->file('file')->store('products');
      }
      
      DB::table('forum_post')->insert([
            'IdPost' =>  $idPost,
            'JudulPost'=> $JudulPost,
            'IsiPost'=> $IsiPost ,
            'IdPengepost'=> $idPengepost,
            'NamaPengepost'=> $namaPengepost,
            'img_path' => $filepath,
            'like' => $like,
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]); 
    }

    function getPost()
    {
      $res =  DB::table('forum_post')->get();  
      return Response::json($res);
    }

    function getPostID($id)
    {
      $res = DB::table('forum_post')->where('IdPost', $id)->get();
      return Response::json($res);
    }

    function getDeletePostID($id)
    {
      $res = DB::table('forum_post')->where('IdPost', $id)->delete();
      return Response::json($res);
    }
}