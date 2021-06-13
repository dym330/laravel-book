<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sign_up(Request $request) {
        $sesdata = $request->session()->get('id');
        return view('session.sign_up');
    }

    public function create(Request $request) {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        $request->session()->put('id', $user->id);
        return redirect('/');
    }

    public function sign_in() {
        return view('session.sign_in');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        if ($user && $user->password == $request->password) {
            $request->session()->put('id', $user->id);
            session()->flash('flash_message', 'ログインに成功しました');
            return redirect(route('user.show', ['user' => $user->id]));
        } else {
            return view('session.sign_in');
        }
    }

    public function logout(Request $request) {
        $request->session()->forget('id');
        return redirect('/');
    }
}
