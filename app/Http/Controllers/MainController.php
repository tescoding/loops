<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Get list user with comments
    public function getListUser(){
        $data = User::with('getcomment')->get();
        return response()->json($data);
    }
}
