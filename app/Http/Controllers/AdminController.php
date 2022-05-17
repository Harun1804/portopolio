<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home()
    {
        $educations     = Experience::whereCategory('education')->latest()->get();
        $organizations  = Experience::whereCategory('organization')->latest()->get();
        $works          = Experience::whereCategory('work')->latest()->get();
        $mainSkills     = Skill::whereMain(1)->latest()->limit(3)->get();
        $skills         = Skill::whereMain(0)->latest()->get();
        $projects       = Project::latest()->take(10)->get();
        $projectsCount  = Project::count();
        return view('welcome',compact(['educations','organizations','works','mainSkills','skills','projects','projectsCount']));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
