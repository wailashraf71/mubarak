<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;

class ProjectController extends Controller
{
    public function __construct()
    {
        auth()->setDefaultDriver('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->type = $request->type;

        $imageName = time() . uniqid() . '.webp';
        $thumb = Image::make($request->file('photo'));
        $thumb_large = $thumb->widen(1000)->encode('webp');
        Storage::disk('local')->put('public/images/projects/' . $imageName, $thumb_large);

        $project->image = $imageName;
        $project->save();

        return redirect(route('admin.projects.index'))->with('message', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin.projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $imageName = $project->image;
        if ($request->file('photo') != null) {
            Storage::disk('local')->delete('public/images/projects/' . $imageName);

            $imageName = time() . uniqid() . '.webp';
            $thumb = Image::make($request->file('photo'));
            $thumb_large = $thumb->widen(1000)->encode('webp');
            Storage::disk('local')->put('public/images/projects/' . $imageName, $thumb_large);
        }
        $project->update(["title" => $request->title, "image" => $imageName, "description" => $request->description, "type" => $request->type]);

        return redirect()->back()->with('message', 'Project updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('message', 'Project deleted successfully');
    }
}
