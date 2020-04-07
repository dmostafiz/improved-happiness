<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Mail\UserPAsswordChanged;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{ 
    public function index()
    {
        return view('admin/user/profile');
    }

    public function profileEdit()
    {
        $id = Auth::user()->id;
        $data['user'] = User::find($id);

        // dd($data['user']);
        return view('admin/user/edit', $data);
    }

    public function changePassword()
    {
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        return view('admin/user/password',$data);
    }

    public function updateEdit(Request $request, $id)
    {
        $user = User::find($id);

        // dd($user);
        
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $fileName = "user-".time().".".$ext;
            $path = "storage/user/".$fileName;

            if(!Storage::disk('public')->exists('user'))
            {
               Storage::disk('public')->makeDirectory('user');
            }

            // dd($user->avatar);

            if( $user->avatar != "")
            {
                Storage::disk('public')->delete('user/'. $user->avatar);
            }

            Image::make($file)->resize(200,200)->save($path);
        }
        else 
        {
            $fileName = $user->avatar;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->avatar = $fileName;
        $user->save();

        Toastr::success('profile updated successfully.', 'Success');
 
        return redirect()->route('user.profile');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|max:100|confirmed',
            'password_confirmation' => 'required'
        ]);
    //    dd($request->all());
        $user = User::find($id);

        // dd( Hash::check($request->current_password, $user->password) );

        if(!Hash::check($request->current_password, $user->password))
        {
            Toastr::error('Current password in incorrect.', 'Error');
 
            return redirect()->back();
        }

        $password = $request->password;

        $user->password = bcrypt($password);
        $user->save();

        Mail::to($user->email)->send(new UserPAsswordChanged($user, $password));

        Toastr::success('Password updated successfully.', 'Success');
        return redirect()->route('user.profile');

    }
}
