<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Cloudinary;

class CloudinaryController extends Controller
{
    public function index(User $user)
    {
        return view('/index')->with(['user'=>$user->get()]);
    }
    public function cloudinary()
    {
        return view('cloudinary');  //cloudinary.blade.phpを表示
    }

    public function cloudinary_store(Request $request)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($image_urll);  //画像のURLを画面に表示
    }
}
?>