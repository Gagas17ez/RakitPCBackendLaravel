<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use App\Models\forumPost;
 
use Illuminate\Support\Facades\Storage;
 
class PostController extends Controller
{
    function postSavePost(Request $request)
    {
      $this->validate($request, [
        'JudulPost' => 'required|max:200',
        'IsiPost' => 'required|max:800',
        'IdPengepost' => 'required|max:200',
        'NamaPengepost' => 'required|max:200',
        'img_path' => 'required'
      ]);
      
      $like = 0;
      $forumPost = new forumPost();
      $forumPost->JudulPost = $request->JudulPost;
      $forumPost->IsiPost = $request->IsiPost;
      $forumPost->IdPengepost = $request->IdPengepost;
      $forumPost->NamaPengepost = $request->NamaPengepost;
      $forumPost->like = $like;

      $check = $request->file('img_path');
      if ($check == 0){
        $forumPost->img_path = "0";
      }else {
        $forumPost->img_path = $request->file('img_path')->store('products');
      }

      $hasil = $forumPost->save();
      return $hasil;
    }

    function getPost()
    {
      $hasil =  forumPost::all();
      return $hasil;
    }

    function getPostID($id)
    {
      $hasil =  forumPost::select("*")
                        ->where('IdPost', $id)
                        ->get();
      return $hasil;
    }

    function getPostUserID($id)
    {
      $hasil =  forumPost::select("*")
                        ->where('IdUser', $id)
                        ->get();
      return $hasil;
    }

    function getDeletePostID($id)
    {
      $hasil =  forumPost::select("*")
                        ->where('IdPost', $id)
                        ->delete();
      return $hasil;
    }
}