
@extends('layouts.principal')

@section('titulo', 'Clientes - Departamentos')

@section('index')

<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Acessórios</li>
    <li>Roupas</li>
    <li>Sabão</li>
</ul>


<x-alert titulo='Erro Fatal' tipo='success'>
    <p><strong>ERROR</strong></p>
    <p>Ocorreu um erro muio bugado do parada</p>
</x-alert>

@component('componentes.alerta',  ['titulo'=>'Erro Fatal', 'tipo' => 'info'])
    <p><strong>ERROR</strong></p>
    <p>Ocorreu um erro muio bugado do parada</p>
@endcomponent

@component('componentes.alerta',  ['titulo'=>'Erro Fatal', 'tipo' => 'error'])
    <p><strong>ERROR</strong></p>
    <p>Ocorreu um erro muio bugado do parada</p>
@endcomponent

@component('componentes.alerta',  ['titulo'=>'Erro Fatal', 'tipo' => 'warning'])
    <p><strong>ERROR</strong></p>
    <p>Ocorreu um erro muio bugado do parada</p>
@endcomponent

@endsection