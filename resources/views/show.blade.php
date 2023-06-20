@extends('layouts.main')

@section('title', 'JL Vault')


@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Mais Informações</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-contas-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Usuario/Email</th>
                    <th scope="col">Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$conta->title}}</td>
                    <td>{{$conta->username}}</td>
                    <td>{{$conta->password}}</td>
                    <td>
                        <form action="/contas/{{$conta->id}}" method="get">
                            @csrf
                            <button class="btn btn-info edit-btn">Editar</button>
                        </form>
                        <form action="/contas/{{$conta->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger delete-btn">Deletar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
