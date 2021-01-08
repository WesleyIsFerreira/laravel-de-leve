@extends('layouts.principal')

@section('titulo', 'Clientes - Index')

@section('index')
    <h3>{{$titulo}}</h3>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>


    @if (count($clientes) > 0)
        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{ $c['id'] }} | {{ $c['nome'] }} |
                    <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
                    <a href="{{ route('clientes.show', $c['id']) }}">Info</a> |
                    <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
            @endforeach
        </ul>
        
        @for ($i = 0; $i < count($clientes); $i++)
            {{$clientes[$i]['nome']}},
        @endfor

        <br>
        
        @foreach ($clientes as $c)
            
            <p>
                {{$c['nome']}},
                @if ($loop->first)
                
                @endif
                @if ($loop->last)
                    (ultimo)
                @endif
                
            </p>
            
        @endforeach

    @else

    <h4>Não existe clientes cadastrados</h4>

    @endif

    @empty($clientes)
        <p>Variavel clientes ta vazio</p>
    @endempty
@endsection