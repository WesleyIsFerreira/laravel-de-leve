
@extends('layouts.principal')

@section('titulo', 'Clientes - Create')

@section('index')
<h3>Novo cliente</h3>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
</form>
@endsection