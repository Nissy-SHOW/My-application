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
        // dd($request);
        // $input = $request['item'];
        // dd($input);
        // $input += ['user_id' => $request->user()->id];
        // $input += ['image' => $image_url];
        // $image_url = Cloudinary::upload($input['image']->getRealPath())->getSecurePath();
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        // $image = $input['image']->getRealPath();
        //$image_url = Cloudinary::upload($image->getSecurePath());
        // $item->fill($input)->save();
        // return redirect('/items/' . $item->id);
        // dd($request->all());
        dd($image_url);
        // dd($input['image']->getRealPath(),$input,$request->file('image'));
        
    }
}
?>