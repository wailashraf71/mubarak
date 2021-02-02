<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
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
        $usersCount = User::count() - 1;
        $projectsCount = Project::count();
        $messagesCount = Message::count();
        return view('admin.index', [
            "projects_count" => $projectsCount,
            "messages_count" => $messagesCount
        ]);
    }

    public function settings()
    {
        return response(view('admin.settings.index'));
    }

    public function settingsUpdate(Request $request)
    {
        if ($request->password != null && $request->password != ''){
            $user = User::findOrFail(auth()->user()->id);
            $newPassword = $request->password == null ? $user->password : bcrypt($request->password);
            $user->update(["password" => $newPassword]);
            auth('admin')->logout();
            return redirect()->back()->with('message', 'New password has been saved successfully.');
        }
        return redirect()->back()->with('message', 'Nothing changed.');
    }
}
