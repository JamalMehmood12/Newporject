<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    //
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact('data'));
    }
    public function foodmenu()
    {
        return view('admin.foodmenu');
    }
    public function uploadfood(Request $req)
    {
        $data = new food;
        $image = $req->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->save();
        return redirect()->back();
    }
    public function foodmenushow()
    {
        $data = food::all();
        return view("admin.foodmenushow", compact("data"));
    }
    public function deletemenu($id)
    {
        $data= food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
