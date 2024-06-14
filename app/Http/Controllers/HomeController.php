<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    function home(){
        $items=Item::all();
        return view('home',compact('items'));
    }
}
