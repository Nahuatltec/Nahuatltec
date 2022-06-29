<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){
        return view('auth.admin');
    }

    public function season(){
        return view('admin.season');
    }

    public function store(){
        return view('admin.store');
    }

}
