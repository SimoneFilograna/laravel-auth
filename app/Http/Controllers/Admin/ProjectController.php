<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index():View
    {
        $projects= Project::all();

        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create():View
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        $data = $request->validate([
            "title"=>"required|string",
            "language"=>"required|string",
            "link"=>"required|string",
            "description"=>"required|string",
            "thumb"=>"required|string",
            "release"=>"required|date",
        ]);

        //creo l'istanza di Project, fill per assegnare i dati all'istanza
        //save per salvarli nel database

        $project = Project::create($data);

        return redirect()->route("admin.projects.show", $project->id);
    }

    /**
     * Display the specified resource.
     * @param string $title
     * @return View
     */
    public function show(string $title):View
    {
        $project = Project::where("title", $title);

        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
