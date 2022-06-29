<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller{
    
    public function create(){
        return view('auth.register');
    }

    public function store(){
        
        $this->validate(request(),[
        'age'=> 'required|numeric', 
        'name'=> 'required|min:4|string',
        'email'=> 'required|email|unique:users|string',
        'password'=> 'required|confirmed|min:8|max:30',
        'password_confirmation'=> 'required',
        ],
        [  
        'age.required'=> 'Por favor ingrese su Edad',
        'name.required'=> 'Por favor ingrese un Nombre',
        'email.required'=> 'Por favor ingrese un Correo',
        'password.required'=> 'Por favor ingrese una Contraseña',
        'password_confirmation.required'=> 'Por favor confirme la Contraseña',
        ]
    );
        $user = User::create(request(['role','age','name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/user');
    }
}
