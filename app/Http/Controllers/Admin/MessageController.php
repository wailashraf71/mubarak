<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;

class MessageController extends Controller
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
        $messages = Message::all();
        return view('admin.messages.index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.messages.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return DataTableCollectionResource
     */
    public function data(Request $request)
    {
        $length = $request->input('length');
        $sortBy = $request->input('column');
        $orderBy = $request->input('dir');
        $searchValue = $request->input('search');


        if ($searchValue != null)
            $query = Message::where('name', 'LIKE', '%' . $searchValue . '%')->orWhere('email', 'LIKE', '%' . $searchValue . '%')->orWhere('subject', 'LIKE', '%' . $searchValue . '%')->orderBy('created_at', $orderBy ?? 'desc');
        else
            $query = Message::orderBy('created_at', $orderBy ?? 'desc');


        $data = $query->paginate($length);

        return new DataTableCollectionResource($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        $project = Message::find($id);
        return view('admin.messages.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $project = Message::find($id);
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
        $project = Message::findOrFail($id);
        $imageName = $project->image;
        if ($request->file('photo') != null) {
            $thumb = Image::make($request->file('photo'));
            $thumb_large = $thumb->widen(500)->encode('webp');
            Storage::disk('local')->put('public/images/messages/' . $imageName, $thumb_large);
        }
        $project->update(["title" => $request->title, "image" => $imageName]);

        return redirect()->back()->with('message', 'Message updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function destroy($id)
    {
        $project = Message::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('message', 'Message deleted successfully');
    }
}
