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
      $judul = $request->input('judulPost');
      $isi = $request->input('isi');
      $idPengepost = $request->input('idPengepost');
      $namaPengepost = $request->input('namaPengepost');
      $filepath = $request->file('file')->store('products');
       
      DB::table('forumpost')->insert([
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
      $res =  DB::table('forumpost')->get();  
      return Response::json($res);
    }

    function deleteData($id)
    {
      $res = DB::table('forumpost')->where('IdPost', $id)->delete();
      return Response::json($res);
    }
}