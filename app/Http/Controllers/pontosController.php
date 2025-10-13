<?php

namespace App\Http\Controllers;


use App\Models\Pontos;
use App\Models\Regiao;
use Illuminate\Http\Request;

class PontosController extends Controller
{
    // Listar todos
    public function index()
    {
        $pontos = Pontos::all();
        return view('pontos.index', compact('pontos'));
    }

    // Formulário de criação
    public function create()
    {
        return view('pontos.create');
    }

    // Salvar novo produto
    public function store(Request $request)
    {
        $request->validate([
            'id_reg' => 'required|numeric',
            'nome_pon' => 'required',
            'desc_pon' => 'required',
            'endereco_pon' => 'required',
        ]);

        Pontos::create($request->all());
        return redirect()->route('pontos.index')->with('success', 'Ponto criada com sucesso!');
    }

    // Mostrar um produto
    public function show (Pontos $pontos)
    {
        return view('pontos.show', compact('pontos'));
    }

    // Formulário de edição
    public function edit(Pontos $pontos)
    {
        return view('pontos.edit', compact('pontos'));
    }

    // Atualizar produto
    public function update(Request $request,Pontos $pontos)
    {
        $request->validate([
            'id_reg' => 'required|numeric',
            'nome_pon' => 'required',
            'desc_pon' => 'required',
            'endereco_pon' => 'required',
        ]);

        $pontos->update($request->all());
        return redirect()->route('pontos.index')->with('success', 'Ponto atualizada com sucesso!');
    }

}