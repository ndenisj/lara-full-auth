<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function profile()
    {
        return view('profile');
    }

    public function profileUpdate(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|min:3|string|max:100',
            'email' => 'required|min:5|string|max:200|email',
        ]);

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        $request->session()->flash('message', 'Profile Updated');

        return back();
    }

    public function changepassword()
    {
        return view('changepassword');
    }

    public function changePwd(Request $request)
    {
        if (!Hash::check($request->get('current_password'), Auth::user()->password)) {
            return back()->with('error', 'Your current password is wrong');
        }
        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()->with('error', 'New password can not be they same with current password');
        }

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return back()->with('message', 'Password Changed');
    }

    public function profileAvatar()
    {
        return view('profilePicture');
    }

    public function profilePictureUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = Auth::user()->id . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(150, 150)->save(public_path('/img/avatar/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;

            $request->validate([
                'avatar' => 'required|image|mimes:png,jpg',
            ]);

            $user->save();
        }
        return back()->with('message', 'Profile Picture Uploaded');
    }
}
