<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Alert;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        $this->validate($request, [
            'username'     => 'required',
            'password'  => 'required|min:3'
        ]);
        $superadmin_data =  array(
            'username'     => $request->get('username'),
            'password'  => $request->get('password')
             );
         // dd(Users::get());

        
        if (Auth::guard()->attempt($superadmin_data))
        {
            $data = User::where('username',$superadmin_data['username'])->where('password',$superadmin_data['password'])->first();
            $level = $data['level'];
            if ($level == 1) {

            return redirect()->route('home')->with('alert',  'Login Success');
            
            }else{
                return redirect()->route('homepage')->with('alert',  'Login Success');
            }
        }
        else
        {
            return back()->with('alert', 'Wrong login details');
        }
    }
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->flush();
        return redirect('/login');
    }
    protected function guard()
    {
        return Auth::guard();
    }

    
}
