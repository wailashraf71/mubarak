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

        $photos = array();
        foreach ($request->file('photo') as $photo){
            $imageName = time() . uniqid() . '.webp';
            $thumb = Image::make($photo->getRealPath());
            $thumb_large = $thumb->encode('webp');
            Storage::disk('local')->put('public/images/projects/' . $imageName, $thumb_large);
            array_push($photos, $imageName);
        }

        $project->image = json_encode($photos);
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
        $oldImages = $project->image;
        if ($request->file('photo') != null) {
            foreach (json_decode($oldImages) as $imageToBeDeleted) {
                Storage::disk('local')->delete('public/images/projects/' . $imageToBeDeleted);
            }
            $photos = array();
            foreach ($request->file('photo') as $photo) {
                $imageName = time() . uniqid() . '.webp';
                $thumb = Image::make($photo->getRealPath());
                $thumb_large = $thumb->encode('webp');
                Storage::disk('local')->put('public/images/projects/' . $imageName, $thumb_large);
                array_push($photos, $imageName);
            }

            $oldImages = json_encode($photos);
        }
            $project->update(["title" => $request->title, "image" => $oldImages, "description" => $request->description, "type" => $request->type]);

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
        foreach (json_decode($project->image) as $imageToBeDeleted) {
            Storage::disk('local')->delete('public/images/projects/' . $imageToBeDeleted);
        }
        return redirect()->back()->with('message', 'Project deleted successfully');
    }
}
