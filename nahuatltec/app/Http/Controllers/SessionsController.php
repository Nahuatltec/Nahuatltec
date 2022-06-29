<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function notices(){
        return view('auth.notices');
    }

    public function contact(){
        return view('auth.contact');
    }

    public function recover(){
        return view('auth.recover');
    }

    public function faq(){
        return view('auth.faq');
    }

    public function lecrud(){
        return view('auth.lecrud');
    }

    public function acerca(){
        return view('auth.acercade');
    }


    public function activities(){
        return view('user.activities');
    }

    public function activity(){
        return view('user.activity');
    }
    public function activity2(){
        return view('user.activityanimales');
    }
    public function activity3(){
        return view('user.activitysujetos');
    }
    public function secret(){
        return view('auth.secret');
    }

    public function question(){
        $this->validate(request(),[
            'email'=> 'required|email',
            ],
            [  
            'email.required'=> 'Por favor ingrese un Correo',
            ]
        );
        if(auth()->attempt(request(['email']))==false){
            return back()->withErrors([
                'message' => 'Correo email no existe',
      
            ]);
        }else {
            return redirect()->to('/resetpass');
        }
    }
    public function login(){
        $this->validate(request(),[
            'email'=> 'required|email|unique:users',
            'password'=> 'required|confirmed|min:8|max:30',
            ],
            [  
            'email.required'=> 'Por favor ingrese un Correo',
            'password.required'=> 'Por favor ingrese una Contraseña',
            ]
        );


        if(auth()->attempt(request(['name','password']))==false){
            return back()->withErrors([
                'message' => 'Correo y/o contraseña incorrectos',
      
            ]);
        }else {
            if(auth()->user()->role=='admin'){
                return redirect()->to('/admin');
            }else{
                return redirect()->to('/user');
            }
        }
    }

    public function readings(){
        return view('user.readings');
    }

    public function season(){
        return view('user.season');
    }

    public function store(){
        return view('user.store');
    }
    
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
