<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    // Mostra o formulário de criação
    public function create()
    {
        return view('produtos.create');
    }

    // Salva um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'nome_prod' => 'required|string|max:100',
            'desc_prod' => 'required|string|max:255',
            'preco_prod' => 'required|numeric|min:0',
            'estoque_prod' => 'required|integer|min:0',
        ]);

        Produto::create($request->all());

        return redirect()
            ->route('produtos.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    // Mostra os detalhes de um produto
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', compact('produto'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    // Atualiza um produto existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_prod' => 'required|string|max:100',
            'desc_prod' => 'required|string|max:255',
            'preco_prod' => 'required|numeric|min:0',
            'estoque_prod' => 'required|integer|min:0',
        ]);

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return redirect()
            ->route('produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    // Exclui um produto
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()
            ->route('produtos.index')
            ->with('success', 'Produto removido com sucesso!');
    }
}
