<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Models\forumPost;
use App\Gambar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PostSaveRequest;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    function postSavePost(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'JudulPost' => 'required|max:200',
          'TipePost' => 'required|max:200',
          'IsiPost' => 'required|max:800',
          'IdPengepost' => 'required|max:200',
          'NamaPengepost' => 'required|max:200',
          'img_path' => 'required'
      ]);

      if ($validator->fails()) {
        return response("Gagal", 400);
      }
      
      $like = 0;
      $forumPost = new forumPost();
      $forumPost->JudulPost = $request->JudulPost;
      $forumPost->TipePost = $request->TipePost;
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
      if ($hasil) {
        return response($hasil, 200 );
      }else {
        return response($hasil, 400);
      }
      
    }

    function getUpdatePost(Request $request){
      $request->validate([
        'IdPost' => 'required|max:200',
        'JudulPost' => 'required|max:200',
        'TipePost' => 'required|max:200',
        'IsiPost' => 'required|max:800',
        'img_path' => 'required'
      ]);

      $gambar = forumPost::select("img_path")
                        ->where('idPost', $request->idPost)
                        ->first();
      
      \File::delete(public_path($gambar->img_path));

      $check = $request->file('img_path');
      
      if ($check == 0){
        $forumPost->img_path = "0";
      }else {
        $forumPost->img_path = $request->file('img_path')->store('products');
      }
    
      $hasil = forumPost::where('IdPost', $request->idPost)->update([
        'JudulPost'=> $request->JudulPost,
        'TipePost'=> $request->TipePost,
        'IsiPost'=> $request->IsiPost,
        'img_path'=> $request->img_path,
      ]);
    
      if ($hasil) {
        return response($hasil, 200 );
      }else {
        return response($hasil, 400);
      }
    }

    function getTambahLike($id)
    {
      $hasil = forumPost::where('IdPost',$id)
                ->increment('Like', 1);
      return $hasil;
    }

    function postPostFilter(Request $Request){
      $this->validate($Request, [
        'Filter' => 'required|max:200',
        'Sort' => 'required|max:800',
      ]);
      
      if ($Request->Sort == "Terbaru"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->orderByDesc("created_at")
                      ->get();
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->orderByDesc("created_at")
                      ->get();
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->orderByDesc("created_at")
                      ->get();
        }else {
          $Return = forumPost::select("*")
                      ->orderByDesc("created_at")
                      ->get();
        }
        return response($Return, 200);
      }
      elseif ($Request->Sort == "Terlama"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->orderBy("created_at")
                      ->get();
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->orderBy("created_at")
                      ->get();
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->orderBy("created_at")
                      ->get();
        }else {
          $Return = forumPost::select("*")
                      ->orderBy("created_at")
                      ->get();
        }
        return response($Return, 200);
      }
      elseif ($Request->Sort == "0"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->get();
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->get();
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->get();
        }
        return response($Return, 200);
      }else {
        return response(400);
      }
    }

    function getPost()
    {
      $hasil =  forumPost::all();
      return response($hasil, 200);
      
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
                        ->where('IdPengepost', $id)
                        ->get();
      return $hasil;
    }

    function getDeletePostID($id)
    {
      $gambar = forumPost::select("img_path")
                        ->where('idPost',$id)
                        ->first();

      $hasil =  forumPost::select("*")
                        ->where('IdPost', $id)
                        ->delete();

      
      \File::delete(public_path($gambar->img_path));
         
      return $hasil;
    }
}