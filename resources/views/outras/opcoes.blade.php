@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('index')

<div class="options">
    <ul>
        <li><a class="warning {{ request()->routeIs('opcoes/1') ? 'selected' : ''  }}" href="{{route('opcoes',1)}}">warning</a></li>
        <li><a class="info selected" href="{{route('opcoes',2)}}">info</a></li>
        <li><a class="success" href="{{route('opcoes',3)}}">success</a></li>
        <li><a class="error" href="{{route('opcoes',4)}}">error</a></li>
    </ul>
</div>

@if (isset($opcao))
    @switch($opcao)
        @case(1)
            <x-alert titulo='Erro Fatal' tipo='warning'>
                <p><strong>ERROR</strong></p>
                <p>Ocorreu um erro muio bugado do parada</p>
            </x-alert>
            @break
        @case(2)
            <x-alert titulo='Erro Fatal' tipo='info'>
                <p><strong>ERROR</strong></p>
                <p>Ocorreu um erro muio bugado do parada</p>
            </x-alert>
            @break
        @case(3)
            <x-alert titulo='Erro Fatal' tipo='success'>
                <p><strong>ERROR</strong></p>
                <p>Ocorreu um erro muio bugado do parada</p>
            </x-alert>
            @break
        @case(4)
            <x-alert titulo='Erro Fatal' tipo='error'>
                <p><strong>ERROR</strong></p>
                <p>Ocorreu um erro muio bugado do parada</p>
            </x-alert>
            @break
        @default
            
    @endswitch
@endif

@endsection