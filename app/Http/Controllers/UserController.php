<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(int $user_id): view
    {
        //dd($user_id);
        //return '<h1>Hola mundo desde el controlador '. $user_id .'</h1>';
        //dd(User::all());

        $user = User::find($user_id);

        //dd($user);

        return view('welcome', ['user' => $user]);
    }
}
