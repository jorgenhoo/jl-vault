<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContaController extends Controller
{
    public function  index() {
        return view('/welcome');
    }

    public function contas() {
        $user = auth()->user();
        $contas = $user->contas;
        return view('/contas', ['contas' => $contas]);
    }

    public function show($id) {
        $conta = Conta::findOrFail($id);
        $conta->password = Crypt::decryptString($conta->password);
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
        $conta->password = Crypt::encryptString($request->password);
        $conta->title = $request->title;
        $user = auth()->user();
        $conta->user_id = $user->id;
        $conta->save();
        return redirect('/dashboard')->with('msg', 'Conta Criada com Sucesso!');
    }

    public function put(Request $request) {
        $conta = Conta::find($request->id);
        $conta->username = $request->username;
        $conta->password = Crypt::encryptString($request->password);
        $conta->title = $request->title;
        $conta->update();
        return redirect('/contas')->with('msg', 'Conta Editada com Sucesso!');
    }
}
