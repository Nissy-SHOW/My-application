<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Item;

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
        $input = $request['item'];
        // dd($input);
        $input += ['user_id' => $request->user()->id]; 
        $item->fill($input)->save();
        return redirect('/items/' . $item->id);
        // dd($request->all());
    }
}
?>