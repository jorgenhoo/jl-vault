@extends('layouts.login')

@section('title', 'JL Vault')

@section('content')
    <h1>Bem Vindo!</h1>
    <a href="/contas/create" class="btn btn-primary">Adicionar Conta</a>
    <br> <br>
    <div id="events-container" class="col-md-12">
        <h2>Suas Contas</h2>
        <div id="cards-container" class="row">
            @foreach($contas as $conta)
                <div class="card col-md-3">
                    <img src="/img/login.jpg" alt="{{ $conta->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conta->title }}</h5>
                    </div>
                    <div class="card-body">
                        <label for="title">Username: </label> {{ $conta->username }}
                        <br>
                        <label for="title">Password: </label> {{ $conta->password }}
                    </div>
                    <a href="/edit" class="btn btn-primary">Editar</a>
                    <br>
                    <a href="/delete" class="btn btn-primary">Exluir</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
