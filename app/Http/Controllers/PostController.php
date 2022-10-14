<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view('/index')->with(['user'=>$user->get()]);
    }
}
?>