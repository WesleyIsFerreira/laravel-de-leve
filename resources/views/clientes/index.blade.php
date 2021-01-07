<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Clientes</h3>
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>
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
</body>
</html>