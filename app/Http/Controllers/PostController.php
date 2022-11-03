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
        'TipePost' => 'required|max:200',
        'IsiPost' => 'required|max:800',
        'IdPengepost' => 'required|max:200',
        'NamaPengepost' => 'required|max:200',
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
      return $hasil;
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
        'Urutkan' => 'required|max:800',
      ]);
      
      if ($Request->Urutkan == "Terbaru"){
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
      elseif ($Request->Urutkan == "Terlama"){
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
      elseif ($Request->Urutkan == "0"){
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
      $hasil =  forumPost::select("*")
                        ->where('IdPost', $id)
                        ->delete();
      return $hasil;
    }
}