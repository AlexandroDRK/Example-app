<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        /*$user -> posts() ->create([
            'title' => 'Meu primeiro post',
            'body' => 'Isso é um  post',
        ]);*/

        #Para deletar todos os posts de um usuário:

       // $user  -> posts() -> delete();

       #Inspecionar os posts de um usuário:
        //dd($user->posts );

        return view('user',['user'=> $user,]);

        #Aula 21 - Eloquent(n:n):

        //adicona o usuário ao time passado por id:
       // $user -> teams() -> attach(2);
        $user->load('teams');
        //return $user->teams;
        //return $user;
    }

    public function index(){
        $users = User::all();
        return view('users',['users' => $users]);
    }
}
