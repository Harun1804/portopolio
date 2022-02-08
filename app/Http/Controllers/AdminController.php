<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home()
    {
        $educations = Experience::whereCategory('education')->latest()->get();
        return view('welcome',compact(['educations']));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
