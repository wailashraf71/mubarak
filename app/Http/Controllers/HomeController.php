<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Throwable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('web.index');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('web.projects.index', ['projects' => $projects]);
    }

    public function projectShow($id)
    {
        $project = Project::find($id);
        return view('web.projects.show', ['project' => $project]);
    }

    public function aboutUs()
    {
        return view('web.about-us');
    }

    public function future()
    {
        return view('web.future');
    }

    public function ourServices()
    {
        return view('web.our-services');
    }

    public function certificates()
    {
        return view('web.certificates');
    }


    public function contact()
    {
        return view('web.contact');
    }

    public function storeMessage(Request $request)
    {
        try {
            $message = new Message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->save();
            return 'OK';
        } catch (Throwable $e) {
            return 'Something went wrong, please check your data.';
        }
    }
}
