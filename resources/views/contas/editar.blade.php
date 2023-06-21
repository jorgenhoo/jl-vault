@extends('layouts.form')

@section('title', 'Editar Conta')


@section('form')@endsection
@section('url', '/contas/put')
@section('conta.title', $conta->title)
@section('conta.username', $conta->username)
@section('conta.id', $conta->id)
@section('button', 'Editar')
@section('subtitleLogin', 'Editar Conta')
