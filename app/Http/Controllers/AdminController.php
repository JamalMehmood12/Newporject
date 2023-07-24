<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

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
        $this->validate($req, [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $data = new food;
        $imagename = '';

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('foodimage', $imagename);
            $data->image = $imagename;
            // Rest of your code
        } else {
            // Handle case when no file was uploaded
        }
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->save();
        return redirect('/foodmenushow');
    }

    public function foodmenushow()
    {
        
        $data = food::paginate(2);
        $data2 = food::paginate(2);
        return view("admin.foodmenushow", compact("data","data2"));
    }
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatemenu($id)
    {
        $data = food::find($id);
        return view("admin.updatemenu", compact("data"));
    }
    public function update(Request $req, $id)
    {

        $data = food::find($id);
        $image = $req->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->save();
        return redirect("/foodmenushow");
    }

    public function reservation(Request $req)
    {


        $data = new reservation;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->guest = $req->guest;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;
        $data->save();
        return redirect()->back();
    }
    public function viewreservation()
    {
        $data = reservation::all();
        return view("admin.adminreservation", compact("data"));
    }
    public function viewchefs()
    {
        $data2 = Foodchef::all();
        return view("admin.adminchefs", compact("data2"));
    }
    public function uploadchef(Request $req)
    {
        $data = new foodchef;
        $imagename = '';

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('chefimage', $imagename);
            $data->image = $imagename;
            // Rest of your code
        } else {
            // Handle case when no file was uploaded
        }
        $data->name = $req->name;
        $data->speciality = $req->speciality;
        $data->save();
        
    }
    public function deletechef($id)
    {
        $data = foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function searchfood(Request $request)
    {
        $search = $request->search;
        $data = food::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('price', 'LIKE', '%' . $search . '%')
            ->get();
    
        return view('admin.foodmenushow', compact('data'));
    }
    public function aboutfood()
    {
        $data = food::all();
        return view("admin.adminfood", compact("data"));
    }
    
}
