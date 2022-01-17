<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\emp;
use App\Models\menu;
use App\Models\cart;
use App\Mail\order;

class User extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function reg(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required',
            'pass' => 'required',
            'ename' => 'required',
            'address' => 'required'
        ]);
        if ($validatedData) {
            emp::insert([
                'email' => $req->email,
                'password' => $req->pass,
                'name' => $req->ename,
                'address' => $req->address
            ]);
            return back()->with('message', "Registered successfully");
        }
    }
    public function loginpage()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);
        if ($validatedData) {
            $data = emp::where('email', $req->email)->first();
            if ($data) {
                $password = $data->password;
                $pass = $req->pass;
                if ($password == $pass) {
                    $req->session()->put('user', $data);
                    return redirect('/menu');
                } else {
                    return back()->with('message', "Wrong password");
                }
            } else {
                return back()->with('message', "user not Register found");
            }
        }
    }
    public function menu()
    {
        $user = session('user');
        $menu = menu::all();
        $count = cart::where('user_id', $user->id)->get();
        if (count($count) > 0) {
            $coun = count($count);
            session()->put('count', $coun);
        } else {
            $coun = 0;
            session()->put('count', $coun);
        }
        return view('menu', compact('menu'));
    }
    public function addcart($id)
    {
        $menu = menu::where('id', $id)->first();
        return view('addcart', compact('menu'));
    }
    public function insidecart(Request $req)
    {
        $user = session('user');
        $validatedData = $req->validate([
            'quantity' => 'required',
        ]);
        if ($validatedData) {
            cart::insert([
                'name' => $req->name,
                'price' => $req->price,
                'image' => $req->image,
                'quantity' => $req->quantity,
                'user_id' => $user->id,
                'user_name' => $user->name,
            ]);
        }
        return redirect('/menu');
    }
    public function cartdisplay()
    {
        $user = session('user');
        $cartdisplay = cart::where('user_id', $user->id)->get();
        return view('cartdisplay', compact('cartdisplay'));
    }
    public function deletecart($id)
    {
        cart::find($id)->delete();
        $user = session('user');
        $count = cart::where('user_id', $user->id)->get();
        if (count($count) > 0) {
            $coun = count($count);
            session()->put('count', $coun);
        } else {
            return redirect('/menu');
        }
        return redirect('/cartdisplay');
    }

    public function checkout($final)
    {
        return view('checkout', ['total' => $final]);
    }
    public function payment(Request $req)
    {
        $validatedData = $req->validate([
            'credit' => 'required',
        ]);
        if ($validatedData) {
            return redirect("/senddata");
        }
    }
    public function success()
    {
        return view('success');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function profile($id)
    {
        $data = emp::where('id', $id)->first();
        return view('edit', compact('data'));
    }
    public function updated(Request $req)
    {
        $data = emp::where('id', $req->uid)->first();
        $validatedData = $req->validate([
            'email' => 'required',
            'pass' => 'required',
            'ename' => 'required',
            'address' => 'required'
        ]);
        if ($validatedData) {
            emp::where('id', $data->id)->update([
                'email' => $req->email,
                'password' => $req->pass,
                'name' => $req->ename,
                'address' => $req->address
            ]);
            return back()->with('message', "updated Succesfully");
        }
    }
    public function sendmail()
    {
        $user = session('user');
        $cartdetail = cart::where('user_id', $user->id)->get();
        $user_mail = emp::where('email', $user->email)->first();
        $user_name = $user->name;
        $details = [
            "Order Id" => "Your tracking id is :" . $cartdetail[0]->id,
            "msg" => "Hello.." . $user_name . "! 
        Thank you!. We hope your experience was awesome and we can’t wait to see you again soon."
        ];
        Mail::to($user->email)->send(new order($details));
        cart::where('user_id', $user->id)->delete();
        return redirect("/success");
    }
    public function logout()
    {
        session()->pull('user');
        session()->pull('count');
        return redirect('/welcome');
    }
}
