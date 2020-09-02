<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function showDashboard(){
        return view('backend.dashboard');
    }
    function showCreate(){
        return view('backend.items.create');
    }
    
}
