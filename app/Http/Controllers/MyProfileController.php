<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //
    public function index()
    {
        // return view('home');
        return view('mybooking.myprofile', [
            'title' => 'MyProfile',
            'active' => 'myprofile',

        ]);
    }

    public function saveprofile(Request $request, User $user)
    {
        $rules = [
            "name" => "nullable|string",
            "username" => "nullable|string",
            "email" => "nullable|email",
            "dob" => "nullable|date",
            "gender" => "nullable|in:Male,Female"
        ];
        $validatedData = $request->validate($rules);
        $filteredData = array_filter($validatedData, function ($value) {
            return !is_null($value) && $value !== '';
        });

        User::where("id", auth()->user()->id)->update($filteredData);
        return redirect("/mybooking/myprofile");
    }
}
