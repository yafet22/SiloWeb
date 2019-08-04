<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $numberofusers = User::count();
        return view('index',compact('users','numberofusers'));
    }
}
