<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $data = Post::with('detailpenulis')->get();
        return view('home',[
            "data" => $data
        ]);
    }

    public function getGuest(){
        $data = "Kosong";
        return response()->json($data);
    }
}
