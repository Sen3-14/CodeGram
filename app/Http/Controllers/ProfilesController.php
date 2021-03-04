<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
  //nacin 1
    public function index($user){
      $user = User::findOrFail($user);
      return view('profiles.index',[
        'user' => $user
      ]);
    }

//nacin 2
    public function edit(User $user){
         return view('profiles.edit',compact('user'));
    }

    public function update(User $user){
      $data = request()->validate([
        'title' => 'required',
        'description' => 'required',
        'url' => 'url',
        'image' => '',
      ]);
        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
