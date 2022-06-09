<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('profil');
    }

    public function riwayat()
    {
        return view('riwayat');
    }

    public function success()
    {
        return view('success');
    }

    public function checkout()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('checkout');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'image' => ['image', 'mimes:jpeg,png,jpg,svg', 'max:2048'],
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $imageName = "user_avatar_" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->image = $input['image'];

        $user->save();

        return redirect('/');
    }
}