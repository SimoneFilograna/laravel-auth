<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    // READ

    /**
     * Displaying initial resource
     * 
     * @return View
     */
    public  function index():View
    {
        $projects=Project::select("*")->limit(3);

        return view("guests.welcome", compact("projects"));
    }
}
