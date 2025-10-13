<?php

namespace App\Http\Controllers;


use App\Models\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    // Listar todos
    public function index()
    {
        $regioes = Regiao::all();
        return view('regiao.index', compact('regioes'));
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
        return redirect()->route('regiao.index')->with('success', 'Região criada com sucesso!');
    }

    // Mostrar um produto
    public function show(Regiao $regiao)
    {
        return view('regiao.show', compact('regiao'));
    }

    // Formulário de edição
    public function edit(Regiao $regiao)
    {
        return view('regiao.edit', compact('regiao'));
    }

    // Atualizar produto
    public function update(Request $request,Regiao $regiao)
    {
        $request->validate([
            'nome_reg' => 'required',
            'desc_reg' => 'required',
        ]);

        $regiao->update($request->all());
        return redirect()->route('regiao.index')->with('success', 'Região atualizada com sucesso!');
    }

}