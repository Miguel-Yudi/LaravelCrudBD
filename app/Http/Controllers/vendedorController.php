<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use App\Models\Regiao;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    // Listar todos os vendedores
    public function index(Request $request)
    {
      $busca = $request->input('busca');

    $vendedores = Vendedor::query()
        ->when($busca, function ($query, $busca) {
            $query->where('nome_vend', 'like', "%{$busca}%")
                  ->orWhere('id_vend', $busca);
        })
        ->get();

    return view('vendedores.index', compact('vendedores', 'busca'));
    }

    // Formulário de criação de novo vendedor
    public function create()
    {
        $regioes = Regiao::all();
        return view('vendedores.create', compact('regioes'));
    }

    // Salvar novo vendedor
    public function store(Request $request)
    {

        $request->validate([
            'nome_vend' => 'required|string|max:100',
            'email_vend' => 'required|email|unique:vendedor,email_vend',
            'tel_vend' => 'nullable|string|max:20',
            'id_reg' => 'required|exists:regiao,id_reg',
        ]);

        Vendedor::create($request->all());

        return redirect()
            ->route('vendedores.index')
            ->with('success', 'Vendedor cadastrado com sucesso!');
    }

    // Mostrar detalhes de um vendedor
    public function show($id)
    {
        $vendedor = Vendedor::with(['regiao', 'notasFiscais', 'responsaveisVeiculo'])->findOrFail($id);
        return view('vendedores.show', compact('vendedor'));
    }

    // Formulário de edição de vendedor
    public function edit($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $regioes = Regiao::all();
        return view('vendedores.edit', compact('vendedor', 'regioes'));
    }

    // Atualizar vendedor
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_vend' => 'required|string|max:100',
            'email_vend' => 'required|email|unique:vendedor,email_vend,' . $id . ',id_vend',
            'tel_vend' => 'nullable|string|max:20',
            'id_reg' => 'required|exists:regiao,id_reg',
        ]);

        $vendedor = Vendedor::findOrFail($id);
        $vendedor->update($request->all());

        return redirect()
            ->route('vendedores.index')
            ->with('success', 'Vendedor atualizado com sucesso!');
    }

    // Remover vendedor
    public function destroy($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        return redirect()
            ->route('vendedores.index')
            ->with('success', 'Vendedor removido com sucesso!');
    }
}
