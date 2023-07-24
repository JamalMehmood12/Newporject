<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Foodchef;
use Illuminate\Http\Request;
use App\Models\Aboutfood;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data2=Foodchef::all();
        $data=food::all();
        $data3=Aboutfood::all();
        return view('layouts/home',compact('data','data2','data3'));
    }
}
