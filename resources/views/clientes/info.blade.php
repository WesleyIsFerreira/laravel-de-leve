<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <h3>Informações do cliente</h3>
        <p>ID: {{ $cliente['id'] }}</p>
        <p>Nome: {{ $cliente['nome'] }}</p>
        <br>
        <a href="{{ route('clientes.index') }}">Voltar</a>
    </body>
</html>