<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Item;
// use Cloudinary;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ItemController extends Controller
{
    public function indexItems(Item $item)
    {
        return view('/items/index')->with(['items'=>$item->get()]);
    }
    public function showItem(Item $item)
    {
        return view('/items/show')->with(['item'=>$item]);
    }
    public function createItems()
    {
        return view('/items/create');
    }
    public function storeItems(Request $request, Item $item)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input = $request['item'];
        $input += ['user_id' => $request->user()->id];
        $input += ['image_url' => $image_url];
        
        $item->fill($input)->save();
        return redirect('/items/' . $item->id);
    }
    public function edit(Item $item)
    {
        return view('items/edit')->with(['item' => $item]);
    }
    public function update(Request $request, Item $item)
    {
        $input_item = $request['item'];
        $item->fill($input_item)->save();
    
        return redirect('/items/' . $item->id);
    }
    public function delete(Item $item)
    {
        $item->delete();
        return redirect('/index');
    }
}
?>