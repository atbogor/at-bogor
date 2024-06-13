<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //
    public function index(){
        // return view('home');
        return view('mybooking.myprofile', [
            'title' => 'MyProfile',
            'active' => 'myprofile',
            
        ]);

        
    }
    public function saveprofile(Request $request, User $user){
        $rules = [
            "name" => "required",
            "username"=> "required",
            "email"=> "required",
            "dob"=> "required",
        ];
        $validatedData = $request->vallidate($rules);
        User::where("id", auth()->user()->id)->update($validatedData);
    }
}
