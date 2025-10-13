<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    // Exibe todos os veículos
    public function index()
    {
        $veiculos = Veiculo::with('responsaveis')->get();
        return view('veiculos.index', compact('veiculos'));
    }

    // Mostra o formulário para criar um novo veículo
    public function create()
    {
        return view('veiculos.create');
    }

    // Salva um novo veículo no banco
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:100',
            'placa' => 'required|string|max:10|unique:veiculos,placa',
            'descricao' => 'nullable|string|max:255',
        ]);

        Veiculo::create($request->all());

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo cadastrado com sucesso!');
    }

    // Exibe os detalhes de um veículo específico
    public function show($id)
    {
        $veiculo = Veiculo::with('responsaveis')->findOrFail($id);
        return view('veiculos.show', compact('veiculo'));
    }

    // Mostra o formulário de edição de um veículo
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    // Atualiza um veículo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required|string|max:100',
            'placa' => 'required|string|max:10|unique:veiculos,placa,' . $id,
            'descricao' => 'nullable|string|max:255',
        ]);

        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo atualizado com sucesso!');
    }

    // Exclui um veículo
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo removido com sucesso!');
    }
}