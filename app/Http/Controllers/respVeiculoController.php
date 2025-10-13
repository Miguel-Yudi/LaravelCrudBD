<?php

namespace App\Http\Controllers;

use App\Models\RespVeiculo;
use App\Models\Veiculo;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class RespVeiculoController extends Controller
{
    // Lista todos os responsáveis por veículos
    public function index()
    {
        $respVeiculos = RespVeiculo::with(['veiculo', 'vendedor'])->get();
        return view('resp_veiculos.index', compact('respVeiculos'));
    }

    // Mostra o formulário de criação
    public function create()
    {
        $veiculos = Veiculo::all();
        $vendedores = Vendedor::all();
        return view('resp_veiculos.create', compact('veiculos', 'vendedores'));
    }

    // Salva um novo responsável
    public function store(Request $request)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'vendedor_id' => 'required|exists:vendedores,id',
            'data_atribuicao' => 'required|date',
        ]);

        RespVeiculo::create($request->all());

        return redirect()
            ->route('resp_veiculos.index')
            ->with('success', 'Responsável por veículo cadastrado com sucesso!');
    }

    // Mostra detalhes de um responsável específico
    public function show($id)
    {
        $respVeiculo = RespVeiculo::with(['veiculo', 'vendedor'])->findOrFail($id);
        return view('resp_veiculos.show', compact('respVeiculo'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $respVeiculo = RespVeiculo::findOrFail($id);
        $veiculos = Veiculo::all();
        $vendedores = Vendedor::all();
        return view('resp_veiculos.edit', compact('respVeiculo', 'veiculos', 'vendedores'));
    }

    // Atualiza um responsável existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'vendedor_id' => 'required|exists:vendedores,id',
            'data_atribuicao' => 'required|date',
        ]);

        $respVeiculo = RespVeiculo::findOrFail($id);
        $respVeiculo->update($request->all());

        return redirect()
            ->route('resp_veiculos.index')
            ->with('success', 'Responsável atualizado com sucesso!');
    }

    // Remove um responsável por veículo
    public function destroy($id)
    {
        $respVeiculo = RespVeiculo::findOrFail($id);
        $respVeiculo->delete();

        return redirect()
            ->route('resp_veiculos.index')
            ->with('success', 'Responsável por veículo removido com sucesso!');
    }
}
