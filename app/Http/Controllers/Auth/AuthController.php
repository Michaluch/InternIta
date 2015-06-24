<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Validator;
use Auth;
use App\Exceptions\Handler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $auth;
    protected $registrar;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */


    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin()
    {
        return view('layout.login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('name'), 'password' => $request->input('password')]))
        {
            return redirect('/');
        }

    }
    public function getRegister()
    {
        return view('layout.register');
    }
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails())
        {
            $this->throwValidationException(
               $request, $validator
            );
        }

        $this->auth->login($this->create($request->all()));

        return redirect($this->redirectPath());
    }
}



