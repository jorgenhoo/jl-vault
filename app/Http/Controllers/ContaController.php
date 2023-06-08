<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function  index() {
        $contas = Conta::all();
        return view('/welcome', ['contas' => $contas]);
    }

    public function create (){
        return view('contas.create');
    }

    public function store(Request $request){
        $conta = new Conta();
        $conta->username = $request->username;
        $conta->password = $request->password;
        $conta->title = $request->title;
        $conta->save();
        return redirect('/');
    }
}
