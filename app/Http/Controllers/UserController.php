<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
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
            $query = User::where('id', $searchValue)->where('id', '!=', 1)->orWhere('name', $searchValue)->orWhere('email', $searchValue)->orderBy('created_at', $orderBy ?? 'desc');
        else
            $query = User::where('id', '!=', 1)->orderBy('created_at', $orderBy ?? 'desc');

        $data = $query->paginate($length);

        return new DataTableCollectionResource($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {
        $findEmail = User::where('email', $request->email)->first();
        if ($findEmail !== null) {
            return redirect()->back()->with('error', ' موجود بالفعل ' . $request->email . ' المستخدم ');
        } else {
            $password = bcrypt($request->password);
            $request->request->add(['password' => $password]);

            // create the user account
            $user = User::create($request->all());

            // Assign role
            $user->assignRole('representative');

            return redirect()->back()->with('message', ' بنجاح.' . $request->email . 'تمت اضافة المستخدم ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        $user = User::with('orders')->find($id);
        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
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
        $user = User::findOrFail($id);
        $newPassword = $request->password == null ? $user->password : bcrypt($request->password);
        $user->update(["name" => $request->name, "email" => $request->email, "password" => $newPassword]);

        return redirect()->back()->with('message', 'تم تغيير تفاصيل المستخدم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse|Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('message', 'User has been deleted successfully.');
    }
}
