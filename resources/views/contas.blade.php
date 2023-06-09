@extends('layouts.main')

@section('title', 'JL Vault')

@section('content')
    <h1>Your Accounts</h1>
    <br> <br>
    <div id="contas-container" class="col-md-12">
        <div id="cards-container" class="row">
            @foreach($contas as $conta)
                <div class="card col-md-3">
                    <img src="/img/login.jpg" alt="{{ $conta->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conta->title }}</h5>
                        <label for="title">Username: </label> {{ $conta->username }}
                        <br>
                        <label for="title">Password: </label> {{ $conta->password }}
                    </div>
                    <a href="/contas/editar?id={{$conta->id}}" class="btn btn-primary">Edit</a>
                    <br>
                    <a href="/contas/delete?id={{$conta->id}}" class="btn btn-primary">Delete</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
