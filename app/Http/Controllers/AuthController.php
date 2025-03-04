<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller{
    
    public function login(): RedirectResponse{
        $user = User::find(1);
        Auth::login($user);
        return redirect()->route('home');
    }
    
    public function logout(): RedirectResponse{
        Auth::logout();
        return redirect()->route('home');
    }

    public function onlyAdmin(){
        if(Gate::allows('userIsAdmin')){
            echo 'Bem-vindo';
        }else{
            echo 'Não autorizado';
        }
    }

    public function onlyUsers(){
        if(Gate::allows('userIsUser')){
            echo 'Usuário sem privilégios';
        }else{
            echo 'Usuário administrador';
        }

        /*
        if(Gate::denies('userIsAdmin')){
            echo 'Usuário sem privilégios';
        }else{
            echo 'Usuário administrador';
        }

        if (Auth::user()->can('userIsUser')) {
            # code...
        }

        if (Auth::user()->cannot('userIsAdmin')) {
            # code...
        }
        */
    }
}