<?php

namespace App\Http\Controllers;

use App\Models\ProdutoVendido;
use App\Models\Produto;
use App\Models\NotaFiscal;
use Illuminate\Http\Request;

class ProdutoVendidoController extends Controller
{
    // Lista todos os produtos vendidos
    public function index()
    {
        $produtosVendidos = ProdutoVendido::with(['notaFiscal', 'produto'])->get();
        return view('produtos_vendidos.index', compact('produtosVendidos'));
    }

    // Mostra o formulário de criação
    public function create()
    {
        $notas = NotaFiscal::all();
        $produtos = Produto::all();
        return view('produtos_vendidos.create', compact('notas', 'produtos'));
    }

    // Salva um novo registro de produto vendido
    public function store(Request $request)
    {
        $request->validate([
            'nota_fiscal_id' => 'required|exists:notas_fiscais,id',
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'valor_unitario' => 'required|numeric|min:0',
        ]);

        ProdutoVendido::create($request->all());

        return redirect()
            ->route('produtos_vendidos.index')
            ->with('success', 'Produto vendido registrado com sucesso!');
    }

    // Mostra os detalhes de um registro
    public function show($id)
    {
        $produtoVendido = ProdutoVendido::with(['notaFiscal', 'produto'])->findOrFail($id);
        return view('produtos_vendidos.show', compact('produtoVendido'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $produtoVendido = ProdutoVendido::findOrFail($id);
        $notas = NotaFiscal::all();
        $produtos = Produto::all();
        return view('produtos_vendidos.edit', compact('produtoVendido', 'notas', 'produtos'));
    }

    // Atualiza um registro existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nota_fiscal_id' => 'required|exists:notas_fiscais,id',
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'valor_unitario' => 'required|numeric|min:0',
        ]);

        $produtoVendido = ProdutoVendido::findOrFail($id);
        $produtoVendido->update($request->all());

        return redirect()
            ->route('produtos_vendidos.index')
            ->with('success', 'Produto vendido atualizado com sucesso!');
    }

    // Remove um registro
    public function destroy($id)
    {
        $produtoVendido = ProdutoVendido::findOrFail($id);
        $produtoVendido->delete();

        return redirect()
            ->route('produtos_vendidos.index')
            ->with('success', 'Registro de produto vendido removido com sucesso!');
    }
}
