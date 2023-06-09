@extends('layouts.login')

@section('title', 'JL Vault')

@section('form')@endsection
@section('subtitle', 'Edit Account')
@section('url', '/contas/update')
@section('conta.title', $conta->title)
@section('conta.username', $conta->username)
@section('conta.id', $conta->id)
@section('button', 'Edit Account')
