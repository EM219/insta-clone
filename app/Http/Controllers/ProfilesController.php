<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($User)
    {
       $user=User::findOrFail($User);
        return view('profiles.index',[
            'user' => $user,
        ]);
        
    }
}
