<h1>Lista de Produtos</h1>
<a href="{{ route('regiao.create') }}">Novo Produto</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<ul>
    @foreach($regioes as $regiao)
        <li>
            Nome: {{ $regiao->nome_reg }} Descrição: {{ $regiao->desc_reg }}
            <a href="{{ route('regiao.show', $regiao) }}">Ver</a>
            <a href="{{ route('regiao.edit', $regiao) }}">Editar</a>
            <form action="{{ route('regiao.destroy', $regiao) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>
