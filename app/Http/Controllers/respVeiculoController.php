<?php

namespace App\Http\Controllers;

use App\Models\Resp_Veiculo;
use App\Models\RespVeiculo;
use App\Models\Veiculo;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class RespVeiculoController extends Controller
{
    // Lista todos os responsáveis por veículos
    public function index(Request $request)
    {
        // Captura os valores dos inputs
    $idBusca = $request->input('busca');   // pode ser id_veiculo ou id_vendedor
    $dataBusca = $request->input('data');  // data do relacionamento

    $resp_veiculos = Resp_Veiculo::query()
        ->when($idBusca, function ($query, $idBusca) {
            // busca tanto em id_veiculo quanto id_vendedor
            $query->where('id_veiculo', $idBusca)
                  ->orWhere('id_vend', $idBusca);
        })
        ->when($dataBusca, function ($query, $dataBusca) {
            // busca por data exata
            $query->whereDate('data', $dataBusca);
        })
        ->get();

    return view('resp_veiculo.index', compact('resp_veiculos', 'idBusca', 'dataBusca'));
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
        'id_veiculo' => 'required|exists:veiculo,id_veiculo',
        'id_vend' => 'required|exists:vendedor,id_vend',
        'data' => 'required|date',
    ]);

    Resp_Veiculo::create([
        'id_veiculo' => $request->id_veiculo,
        'id_vend' => $request->id_vend,
        'data' => $request->data,
    ]);

    return redirect()
        ->route('respVeiculo.index')
        ->with('success', 'Responsável por veículo cadastrado com sucesso!');
}

    // Mostra detalhes de um responsável específico
    public function show($id)
    {
        $respVeiculo = Resp_Veiculo::with(['veiculo', 'vendedor'])->findOrFail($id);
        return view('resp_veiculos.show', compact('respVeiculo'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $respVeiculo = Resp_Veiculo::findOrFail($id);
        $veiculos = Veiculo::all();
        $vendedores = Vendedor::all();
        return view('resp_veiculo.edit', compact('respVeiculo', 'veiculos', 'vendedores'));
    }

    // Atualiza um responsável existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_veiculo' => 'required|exists:veiculo,id_veiculo',
            'id_vend' => 'required|exists:vendedor,id_vend',
            'data' => 'required|date',
        ]);

        $respVeiculo = Resp_Veiculo::findOrFail($id);
        $respVeiculo->update($request->all());

        return redirect()
            ->route('respVeiculo.index')
            ->with('success', 'Responsável atualizado com sucesso!');
    }

    // Remove um responsável por veículo
    public function destroy($id)
    {
        $respVeiculo = Resp_Veiculo::findOrFail($id);
        $respVeiculo->delete();

        return redirect()
            ->route('resp_veiculos.index')
            ->with('success', 'Responsável por veículo removido com sucesso!');
    }
}
