<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function  index() {
        return view('/welcome');
    }

    public function contas() {
        $contas = Conta::all();
        return view('/contas', ['contas' => $contas]);
    }

    public function create (){
        return view('contas.create');
    }

    public function editar (Request $request) {
        $id = $request->id;
        $conta =  Conta::find($id);
        return view('contas.editar', ['conta' => $conta]);
    }

    public function delete (Request $request) {
        $id = $request->id;
        $conta = Conta::find($id);
        $conta->delete();
        return redirect('/');
    }

    public function save(Request $request){
        $conta = new Conta();
        $conta->username = $request->username;
        $conta->password = $request->password;
        $conta->title = $request->title;
        $conta->save();
        return redirect('/')->with('msg', 'Conta Criada com Sucesso!');
    }

    public function update(Request $request) {
        $conta = Conta::find($request->id);
        $conta->username = $request->username;
        $conta->password = $request->password;
        $conta->title = $request->title;
        $conta->update();
        return redirect('/');
    }
}
