@extends('layouts.login')

@section('title', 'JL Vault')

@section('content')
    <h2>Login Page</h2>
    <div class="col-md-6 offset-md-3">
        <form action="/contas" method="post">
            @csrf
            <div class="title">
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            <div class="title">
                <label for="title">Username: </label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="title">
                <label for="title">Password: </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="pasword">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Cadastrar Conta</button>
        </form>
    </div>
@endsection
