<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('auth.create');
    }

    public function store()
    {
    	//validacion de los campos
        $this->validate(request(),array(
            'name' => 'required|min:2',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|unique:users,email'
            ));

    	$user = new User();
    	$user->name = request('name');
    	$user->password = bcrypt(request('password'));
    	$user->email = request('email');
    	$user->save();

    	return redirect('/login');
    }
}
