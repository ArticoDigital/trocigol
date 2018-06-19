<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        Auth()->loginUsingId(1, true);
        $this->middleware(['auth', 'Admin']);
    }

    public function index()
    {
        $users = User::paginate(100);
        return view('back.home',compact('users'));
    }
}
