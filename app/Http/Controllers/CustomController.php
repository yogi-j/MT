<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CustomRequest;
use Hash;

class CustomController extends Controller
{

    public function createSignup(){
        return view('signup');
    }

    public function storeSignup(CustomRequest $request){
        $data = $request->validated();
        $imageName = $request->file('image')->store('profile', 'public');
        $data['image'] = $imageName;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        return back()->with('success', 'User created successfully.');
    }

    public function alluser(Request $request){
        $data = User::all();
        $image = array();
        foreach ($data as $each) {
            $image[$each->id] = Storage::url($each->image);
        }
        return view('allusers',compact('data','image'));
    }
}
