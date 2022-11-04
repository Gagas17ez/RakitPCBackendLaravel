<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Models\forumPost;
use App\Gambar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
class PostController extends Controller
{
    function postSavePost(Request $request)
    {
      try {
      $request->validate([
        'JudulPost' => 'required|max:100',
        'TipePost' => 'required|max:100',
        'IsiPost' => 'required|max:800',
        'IdPengepost' => 'required|max:100',
        'NamaPengepost' => 'required|max:100',
        'img_path' => 'required'
      ]);
      
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
        return response($hasil, 100 );
      }else {
        return response($hasil, 400);
      }
      
    } catch (Exception $ellol) {
      return response("Failed", 400);
    }
      
    }

    function getUpdatePost(Request $request, $id){
      $request->validate([
        'JudulPost' => 'required|max:100',
        'TipePost' => 'required|max:100',
        'IsiPost' => 'required|max:800',
        'img_path' => 'required'
      ]);
      
    }

    function getTambahLike($id)
    {
      $hasil = forumPost::where('IdPost',$id)
                ->increment('Like', 1);
      return $hasil;
    }

    function postPostFilter(Request $Request){
      $this->validate($Request, [
        'Filter' => 'required|max:100',
        'Sort' => 'required|max:800',
      ]);
      
      if ($Request->Sort == "Terbaru"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->orderByDesc("created_at")
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->orderByDesc("created_at")
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->orderByDesc("created_at")
                      ->get()
                      ->paginate(10);
        }else {
          $Return = forumPost::select("*")
                      ->orderByDesc("created_at")
                      ->get()
                      ->paginate(10);
        }
        return response($Return, 100);
      }
      elseif ($Request->Sort == "Terlama"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->orderBy("created_at")
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->orderBy("created_at")
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->orderBy("created_at")
                      ->get()
                      ->paginate(10);
        }else {
          $Return = forumPost::select("*")
                      ->orderBy("created_at")
                      ->get()
                      ->paginate(10);
        }
        return response($Return, 100);
      }
      elseif ($Request->Sort == "0"){
        if ($Request->Filter == "Pertanyaan") {
            $Return = forumPost::select("*")
                      ->where('TipePost', 'Pertanyaan')
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Diskusi") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Diskusi')
                      ->get()
                      ->paginate(10);
        }
        elseif ($Request->Filter == "Review") {
          $Return = forumPost::select("*")
                      ->where('TipePost', 'Review')
                      ->get()
                      ->paginate(10);
        }
        return response($Return, 100);
      }else {
        return response(400);
      }
    }

    function getPost()
    {
      $hasil =  forumPost::all();
      return response($hasil, 100);
      
    }

    function getPostID($id)
    {
      $hasil =  forumPost::select("*")
                  ->where('IdPost', $id)
                  ->get()
                      ->paginate(10);

      return $hasil;
    }

    function getPostUserID($id)
    {
      $hasil =  forumPost::select("*")
                        ->where('IdPengepost', $id)
                        ->get()
                      ->paginate(10);
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