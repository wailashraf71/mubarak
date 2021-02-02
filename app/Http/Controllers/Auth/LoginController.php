<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Show the application's login form.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */

    public function showAdminLoginForm()
    {

        return view('admin.auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::where('email', $input['email'])->first();
        if ($user && $user->hasRole('super-admin')) {
            if (auth('admin')->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.loginAdmin')
                    ->with('error', 'Email-Address And Password Are Wrong.');
            }
        } else {
            return redirect()->route('admin.loginAdmin')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
