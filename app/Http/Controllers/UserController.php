<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {   
        // CONSULTA O DB E RETORNA OS VALORES EM ORDEM DECRECENTE PELO ID, e recupera os valores
        $users = User::orderByDesc('id')->get();

        //renderiza a view --- ENVIANDO A CONSULTA PARA A VIEW
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {

        //renderiza a view
        return view('users.create');

    }

    public function store(UserRequest $request)
    {
        //validar formulario
        $request->validated();

        // INSERE OS DADOS NO DB
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        //redireciona a pagina e imprimo a msg de sucesso
        return redirect()->route('user.index')->with('success', 'Cliente cadastradado com sucesso');
        
    }

    public function edit(User $user)
    {

        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        //validaçao do formulario
        $request->validated();

        //FAZ A ALTERAÇÃO NO DB
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //redireciona a pagina e imprimo a msg de sucesso
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Cliente alterado com sucesso');
    }

    public function destroy(User $user)
    {
        //Apaga registro no DB
        $user->delete();

         //redireciona a pagina e imprimo a msg de sucesso
         return redirect()->route('user.index', ['user' => $user->id])->with('success', 'Cliente apagado com sucesso');
    }
}
