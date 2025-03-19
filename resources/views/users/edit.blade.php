<!DOCTYPE html>
<html lang="ept-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VANGUARDA</title>
</head>
<body>

    <a href="{{ route('user.index') }}">LISTAGEM CLIENTES</a><br><br>
    <a href="{{ route('user.show', ['user' => $user->id]) }}">VISULIZAR CLIENTES</a>

    <h2>Editar dados dos clientes</h2>

    @if($errors->any())

        @foreach ($errors->all() as $error)
            <p style="color: #f00;">
                {{ $error }}
            </p>
        @endforeach
    
    @endif

    <form action="{{ route('user-update', ['user' => $user->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="Nome">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Primeiro Nome" value="{{ old ('name', $user->name) }}"><br><br>

        <label for="Email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Primeiro Nome" value="{{ old ('email', $user->email) }}"><br><br>

        <label for="Senha">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Algo com 3 caracter +" value="{{ old ('password') }}"><br><br>

        <button type="submit">Enviar</button>


    </form>
    
</body>
</html>