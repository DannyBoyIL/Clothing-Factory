<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Session;

class UserController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('usersigned', ['except' => ['logout'/*, '...' */]]);
    }

    public function login() {
        self::$data['title'] .= 'Log in page';
        return view('forms.login', self::$data);
    }

    public function postLogin(LoginRequest $request) {
        $rd = !emptyArray($request['rd'] ? $request['rd'] : '');
        if (User::verifyUser($request)) {
            return redirect($rd);
        } else {
            self::$data['title'] .= 'Log in page';
            return view('forms.login', self::$data)->withError('Wrong email / password combination');
        }
    }

    public function register() {
        self::$data['title'] .= 'Registration page';
        return view('forms.register', self::$data);
    }

    public function postRegister(RegisterRequest $request) {
        User::save_new($request);
        return redirect('user/login');
    }

    public function logout() {
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');
        return redirect('user/login');
    }

}
