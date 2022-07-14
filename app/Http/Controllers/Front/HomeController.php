<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('type', '!=', 'admin')->where('id', '!=', auth()->user()->id)->get();
        return view('front.home')->layout('layouts.front')->with('users', $users);
    }
}
