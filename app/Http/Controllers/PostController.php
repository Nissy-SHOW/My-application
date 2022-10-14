<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Item;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index');
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function indexItems(Post $post)
    {
        return view('indexItems')->with(['posts'=>$post->get()]);
    }
    public function createItems()
    {
        return view('createItems');
    }
    public function storeItems(Request $request, Item $item)
    {
        $input = $request['item'];
        // dd($input);
        $input += ['user_id' => $request->user()->id]; 
        $item->fill($input)->save();
        return redirect('/items/' . $item->id);
        // dd($request->all());
    }
}
?>