<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /// show all items
    function index(){
        $items=Item::all();
       return view('items.index',compact('items'));
    }
    // display create form
    function create(){
        return view('items.create');
        //return "Create New Item form";
    }

    // add new item
    function add(Request $r)
    {
        Item::create($r->all());    
        //$r->price;
        return redirect('item/index');
    }

    function destroy($id)
    {
        Item::where("id",$id)->delete();
        return redirect('item/index');
    }

}
