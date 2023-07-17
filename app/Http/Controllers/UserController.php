<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showDetail()
    {
        $user = Auth::user()->load('role');
        return view('user.detail', compact('user'));
    }
}
