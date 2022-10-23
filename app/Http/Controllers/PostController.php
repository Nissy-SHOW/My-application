<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view('users/index')->with(['user'=>$user->get()]);
    }
    public function edit(User $user)
    {
        return view('users/create')->with(['user' => $user]);
    }
    public function update(Request $request, User $user)
    {
        $Icon = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_post = $request['user'];
        // $input_post += ['user_id' => $request->user()->id];
        $input_post += ['Icon' => $Icon];
        
        $user->fill($input_post)->save();
        return redirect('/');
        
        // dd($input_post);
    }
}
?>