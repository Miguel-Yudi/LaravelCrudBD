<?php

namespace App\Http\Controllers;

use App\Models\NotaFiscal;
use Illuminate\Http\Request;

class NotaFiscalController extends Controller
{
    // Lista todas as notas fiscais
    public function index()
    {
        $notas = NotaFiscal::with(['cliente', 'vendedor', 'produtosVendidos'])->get();
        return view('notas.index', compact('notas'));
    }

    // Mostra o formulário de criação
    public function create()
    {
        return view('notas.create');
    }

    // Salva uma nova nota fiscal
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'vendedor_id' => 'required|exists:vendedores,id',
            'data_emissao' => 'required|date',
            'valor_total' => 'required|numeric|min:1',
        ]);

        NotaFiscal::create($request->all());

        return redirect()
            ->route('notas.index')
            ->with('success', 'Nota fiscal criada com sucesso!');
    }

    // Mostra os detalhes de uma nota fiscal
    public function show($id)
    {
        $nota = NotaFiscal::with(['cliente', 'vendedor', 'produtosVendidos'])->findOrFail($id);
        return view('notas.show', compact('nota'));
    }

    // Mostra o formulário de edição
    public function edit($id)
    {
        $nota = NotaFiscal::findOrFail($id);
        return view('notas.edit', compact('nota'));
    }

    // Atualiza uma nota fiscal existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'vendedor_id' => 'required|exists:vendedores,id',
            'data_emissao' => 'required|date',
            'valor_total' => 'required|numeric|min:0',
        ]);

        $nota = NotaFiscal::findOrFail($id);
        $nota->update($request->all());

        return redirect()
            ->route('notas.index')
            ->with('success', 'Nota fiscal atualizada com sucesso!');
    }

    // Remove uma nota fiscal
    public function destroy($id)
    {
        $nota = NotaFiscal::findOrFail($id);
        $nota->delete();

        return redirect()
            ->route('notas.index')
            ->with('success', 'Nota fiscal excluída com sucesso!');
    }
}
