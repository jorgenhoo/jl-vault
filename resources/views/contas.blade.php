@extends('layouts.main')

@section('title', 'Minhas Contas')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Minhas Contas</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-contas-container">
        @if(count($contas) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Usuario/Email</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contas as $conta)
                        <tr>
                            <td>{{$conta->title}}</td>
                            <td>{{$conta->username}}</td>
                            <td><a href="/show/{{$conta->id}}" class="btn btn-primary">Mais detalhes</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem Contas!</p>
        @endif
    </div>

@endsection
@section('subtitleDisplay', 'Minhas Contas')
