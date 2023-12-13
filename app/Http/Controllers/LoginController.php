<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], 
        [
            'email.required' => 'Campo e-mail é obrigatório!',
            'email.email' => 'Email inválido',
            'password.required' => 'Campo password é obrigatório!',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $login['success'] = true;
            echo json_encode($login);
            return;
            //return redirect()->route('login.index')->withErrors(['error' => 'Email ou senha inválido!']);
        }

        $login['success'] = false;
        $login['message'] = 'Email ou senha inválido!';
        echo json_encode($login);
        return;
        
        //return redirect('/');
    }

    public function destroy(){
        Auth::logout();

        return redirect()->route('login.index');
    }
}
