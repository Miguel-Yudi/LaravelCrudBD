<?php

namespace App\Http\Controllers;


use App\Models\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    // Listar todos
    public function index(Request $request)
{
    $busca = $request->input('busca');

    $regioes = Regiao::query()
        ->when($busca, function ($query, $busca) {
            $query->where('nome_reg', 'like', "%{$busca}%")
                  ->orWhere('id_reg', $busca);
        })
        ->get();

    return view('regioes.index', compact('regioes', 'busca'));
}

    // Formulário de criação
    public function create()
    {
        return view('regiao.create');
    }

    // Salvar novo produto
    public function store(Request $request)
    {
        $request->validate([
            'nome_reg' => 'required',
            'desc_reg' => 'required',
        ]);

        Regiao::create($request->all());
        return redirect()->route('regioes.index')->with('success', 'Região criada com sucesso!');
    }

    // Mostrar um produto
    public function show(Regiao $regiao)
    {
        return view('regioes.index', compact('regiao'));
    }

    // Formulário de edição
    public function edit(Regiao $regiao)
    {
        return view('regioes.edit', compact('regiao'));
    }

    // Atualizar produto
    public function update(Request $request,Regiao $regiao)
    {
        $request->validate([
            'nome_reg' => 'required',
            'desc_reg' => 'required',
        ]);

        $regiao->update($request->all());
        return redirect()->route('regioes.index')->with('success', 'Região atualizada com sucesso!');
    }

}