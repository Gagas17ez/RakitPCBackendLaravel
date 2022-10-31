<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use App\Models\comment;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    function postSaveComment(Request $request)
    {
      $this->validate($request, [
        'IdPengcomment' => 'required|max:200',
        'IdPostComment' => 'required|max:200',
        'NamaPengcomment' => 'required|max:200',
        'IsiComment' => 'required|max:200'
    ]);

    $like = 0;  
    $comment = new comment;
    $comment->IdPengcomment = $request->IdPengcomment;
    $comment->IdPostComment = $request->IdPostComment;
    $comment->NamaPengcomment = $request->NamaPengcomment;
    $comment->IsiComment = $request->IsiComment;
    $comment->Like = $like;
    $hasil = $comment->save();
    return $hasil;
    }

    function getCommentAll()
    {
      $hasil =  comment::all();  
      return Response::json($hasil);
    }

    function getCommentID($id)
    {
      $hasil =  comment::select("*")
                        ->where('IdComment', $id)
                        ->get();
      return $hasil;
    }

    function getCommentPostID($id)
    {
      $hasil =  comment::select("*")
                        ->where('IdPostComment', $id)
                        ->get();
      return $hasil;
    }

    function getDeleteCommentID($id)
    {
      $hasil =  comment::select("*")
                        ->where('IdComment', $id)
                        ->delete();
      return $hasil;
    }
}
