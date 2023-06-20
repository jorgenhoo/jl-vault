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

    public function show($id) {
        $conta = Conta::findOrFail($id);
        return view('show', ['conta' => $conta]);
    }

    public function adicionar (){
        return view('contas.adicionar');
    }

    public function editar (Request $request) {
        $id = $request->id;
        $conta =  Conta::findOrFail($id);
        return view('contas.editar', ['conta' => $conta]);
    }


    public function destroy ($id) {
        Conta::findOrFail($id)->delete();
        return redirect('/contas')->with('msg', 'Conta Exluida com Sucesso!');
    }

    public function store(Request $request){
        $conta = new Conta();
        $conta->username = $request->username;
        $conta->password = $request->password;
        $conta->title = $request->title;
        $conta->save();
        return redirect('/')->with('msg', 'Conta Criada com Sucesso!');
    }

    public function put(Request $request) {
        $conta = Conta::find($request->id);
        $conta->username = $request->username;
        $conta->password = $request->password;
        $conta->title = $request->title;
        $conta->update();
        return redirect('/contas')->with('msg', 'Conta Editada com Sucesso!');
    }
}
