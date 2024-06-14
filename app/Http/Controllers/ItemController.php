<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /// show all items
    function index(){
        $items=Item::all();
        //dd($items);
       return view('items.index',['items'=>$items]);
    }
    // display create form
    function create(){
       

        return view('items.create');
        //return "Create New Item form";
    }

    // add new item
    function add(Request $r)
    {
        $r->validate([
            'title' => 'required',
             'price'=> 'required|integer',
            'food_picture' => 'required'
        ]);

        $slug=Str::slug($r->title);
        $imageName = $slug.'.'.$r->food_picture->extension();
        $r->food_picture->storeAs('', $imageName);
        
        Item::create( [
            'title'=>$r->title,
             'price'=>$r->price,
             'picture'=>$imageName,
            ]);

        return redirect('/');
    }

    function destroy($id)
    {
        Item::where("id",$id)->delete();
        return redirect('/');
    }

}
