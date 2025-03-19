<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANGUARDA</title>
</head>
<body>

    <a href="{{ route('user.index') }}">LISTAGEM CLIENTES</a><br><br>
    
    <a href="{{ route('user.edit', ['user' => $user->id]) }}">EDITAR CLIENTES</a>

    <h2>Listagem dos clientes</h2>

    @if(session('success'))
        <p style="color: #086;">

            {{ session('success')}}

        </p>
    @endif

    <b>ID:</b> {{ $user->id }} <br><br>
    <b>NOME:</b> {{ $user->name }} <br><br>
    <b>EMAIL:</b> {{ $user->email }} <br><br>
    <b>Data Cadastro:</b> {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }} <br><br>
    <b>Data Editado:</b> {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }} <br><br>
    
</body>
</html>