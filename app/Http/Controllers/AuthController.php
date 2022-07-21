<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    }

    public function login_check(Request $request) {
        $formFields = $request->only(['email', 'password']);

        if (Auth::attempt($formFields)) {
            return redirect()->intended(route('user.private'));
        }

        return redirect()->to(route('user.login'))->withErrors([
            'email' => 'Неправильная почта или пароль'
        ]);
    }

    public function register() {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('registration');
    }

    public function register_check(Request $request) {
        $input = $request->request->all();

        if (Auth::check()) {
            return redirect()->to(route('user.private'));
        }
        $validation = Validator::make($input, User::$rules);

        $input['password'] = Hash::make($input['password']);
        $input['password_confirmation'] = Hash::make($input['password_confirmation']);

        if ($validation->passes()) {
            $user = User::create(array(
                'email' => $input['email'],
                'name' => $input['name'],
                'password' => $input['password'],
                'remember_token' => $input['remember_token'] == 'on'
            ));
        } else {
            return redirect()->to(route('user.registration'))->withErrors($validation->errors());
        }

        if ($user) {
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->to('/');
    }

    public function private_cabinet() {
        return view('private');
    }
}
