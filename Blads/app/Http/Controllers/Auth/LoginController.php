<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
/*     protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin()) { // do your magic here
            return redirect()->route('dashboard');
        }

        return redirect('/home');
    } */

    protected $redirectTo = RouteServiceProvider::Dashboard;
    protected $maxAttempts = 5; // Default is 5
    protected $decayMinutes = 5; // Default is 1
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {

        $inputVal = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))) {
            if (auth()->user()->status == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email & Password are incorrect.');
        }
    }
}
