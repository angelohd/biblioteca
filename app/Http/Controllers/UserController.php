<?php

namespace App\Http\Controllers;

use App\Models\PessoaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function adduser(){
        $pessoa = new PessoaModel();
        $pessoa->nome = "Angelo Mwadiavita";
        $pessoa->data_nasc = "1995-11-01";
        $pessoa->nivelacademico_id = 1;
        $pessoa->save();
        $id = $pessoa->id;

        $user = new User();
        $user->name = "@angelo";
        $user->email = "mdv.hd@mdvsecurity.com";
        $senha = "12345";
        $user->password = Hash::make($senha);
        $user->pessoa_id = $id;
        $user->save();
        dd("oky");
    }

    function iniciar_sessao(Request $request){
        if(filter_var($request->email,FILTER_VALIDATE_EMAIL)){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->senha])){
               return 1;
            }
            return 0;
        }
        return 0;
    }

    function dashboard(){
        return view("in.dash.dashboaed");
    }
}
