@extends('layouts.main')

@section('content')
    @yield('form')
    <h1>@yield('subtitle')</h1>
    <div class="col-md-6 offset-md-3">
        <form action="@yield('url')" method="post">
            @csrf
            <div class="title">
                <label for="title">Title: </label>
                <input value="@yield('conta.title')" type="text" class="form-control" id="title" name="title" placeholder="title" required>
            </div>
            <div class="title">
                <label for="title">Username: </label>
                <input value="@yield('conta.username')" type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="title">
                <label for="title">Password: </label>
                <input value="@yield('conta.password')" type="password" class="form-control" id="password" name="password" placeholder="pasword" required>
            </div>
            <br>
            <input value="@yield('conta.id')" type="hidden" name="id">
            <button type="submit" class="btn btn-primary">@yield('button')</button>
        </form>
    </div>
@endsection
