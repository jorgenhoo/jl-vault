@extends('layouts.main')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>@yield('subtitleLogin')</h1>
    </div>
    @yield('form')
    <div class="col-md-6 offset-md-3">
        <form action="@yield('url')" method="post">
            @csrf
            <div class="title">
                <label for="title">Titulo: </label>
                <input value="@yield('conta.title')" type="text" class="form-control" id="title" name="title" placeholder="Ex.: Facebook" required>
            </div>
            <br>
            <div class="title">
                <label for="title">Usuario/Email: </label>
                <input value="@yield('conta.username')" type="text" class="form-control" id="username" name="username" placeholder="Ex.: exemplo@email.com" required>
            </div>
            <br>
            <div class="title">
                <label for="title">Senha: </label>
                <input value="@yield('conta.password')" type="password" class="form-control" id="password" name="password" placeholder="Digite uma senha" required>
            </div>
            <br>
            <input value="@yield('conta.id')" type="hidden" name="id">
            <button type="submit" class="btn btn-primary">@yield('button')</button>
        </form>
    </div>
@endsection
