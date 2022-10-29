<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
 
use Illuminate\Support\Facades\Storage;
 
class PostController extends Controller
{
  
    function saveData(Request $request)
    {
      $idPost = $request->input('idPost');
      $judul = $request->input('JudulPost');
      $isi = $request->input('IsiPost');
      $idPengepost = $request->input('IdPengepost');
      $namaPengepost = $request->input('NamaPengepost');
      $filepath = $request->file('file')->store('products');
       
      DB::table('forum_post')->insert([
            'IdPost' =>  $idPost,
            'JudulPost'=> $judul,
            'IsiPost'=> $isi ,
            'IdPengepost'=> $idPengepost,
            'NamaPengepost'=> $namaPengepost,
            'img_path' => $filepath
          ]); 
    }

    function getData()
    {
      $res =  DB::table('forum_post')->get();  
      return Response::json($res);
    }

    function deleteData($id)
    {
      $res = DB::table('forum_post')->where('IdPost', $id)->delete();
      return Response::json($res);
    }
}