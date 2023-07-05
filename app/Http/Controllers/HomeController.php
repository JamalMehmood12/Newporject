<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Foodchef;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data2=Foodchef::all();
        $data=food::all();
        return view('layouts/home',compact('data','data2'));
    }
}
