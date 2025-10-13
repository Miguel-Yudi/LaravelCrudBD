<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Lista todos os clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Mostra o formulário de criação
    public function create()
    {
        return view('clientes.create');
    }

    // Salva um novo cliente
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'nullable|string|max:20',
        ]);

        Cliente::create($request->all());

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente criado com sucesso!');
    }

    // Mostra os detalhes de um cliente
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    // Atualiza um cliente existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefone' => 'nullable|string|max:20',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    // Remove um cliente
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente deletado com sucesso!');
    }
}
