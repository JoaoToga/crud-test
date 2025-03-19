<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA_Compatible" content="ie-edge">
    <title>VANGUARDA</title>
</head>
<body>
    <a href="{{ route('user.create') }}">CADASTRAR CLIENTE</a>
    <h2>Listagem dos clientes</h2>

    @if(session('success'))
        <p style="color: #086;">

            {{ session('success')}}

        </p>
    @endif

    @forelse ($users as $user)
        <p>
            <b>ID</b>: {{ $user->id }} <br>
            <b>NOME:</b> {{ $user->name }} <br>
            <b>EMAIL:</b> {{ $user->email }} <br><br>
            <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar Dados</a><br><br>
            <a href="{{ route('user.edit', ['user' => $user->id]) }}">Alterar Dados</a><br><br>
            <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Deseja apagar o cliente: {{ $user->name }}')">Apagar Dados</button>
            </form>
            <hr>
        </p>
    @empty
        
    @endforelse
</body>
</html>