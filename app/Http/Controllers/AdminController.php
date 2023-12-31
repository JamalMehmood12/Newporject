<?php

namespace App\Http\Controllers;

use App\Mail\contactmail;
use App\Mail\ContactMail as MailContactMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Aboutfood;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Mail\UserContactConfirmation;
use Auth;




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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        $existingFood = Food::where('title', $req->title)->first();

        if ($existingFood) {
            return redirect()->back()->with('error', 'Title already exists!');
        }

        $data = new Food;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('foodimage', $imagename);
            $data->image = $imagename;
        } else {
            // If no file was uploaded, you can handle it here
        }

        $data->save();
        return redirect('/foodmenushow');
    }


    public function foodmenushow()
    {

        $data = food::all();
        return view("admin.foodmenushow", compact("data"));
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
        $this->validate($req, [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
        ], 
        [
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name is already taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email is already taken.',
            'phone.required' => 'The phone field is required.',
        ]);
        
        $data = new reservation;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->guest = $req->guest;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;
        $data->save();
        Mail::to('jamalminhas12@gmail.com')->send(new ContactMail($req));
        // Mail::to($req->email)->send(new UserContactConfirmation($req));
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
        } else {
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

        if ($data->isEmpty()) {
            return view('admin.foodmenushow')->with('message', 'No results found.');
        } else {

            return view('admin.foodmenushow', compact('data'));
        }
    }

    public function aboutfood()
    {

        return view("admin.adminabout");
    }
    public function uploadaboutfood(Request $request)
    {
        $data = new aboutfood;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('aboutfoodimg', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();;
    }
}
