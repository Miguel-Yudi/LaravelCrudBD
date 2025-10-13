<h1>Editar Produto</h1>
<form action="{{ route('regiao.update', $regiao) }}" method="POST">
    @csrf
    @method('PUT')
    Nome: <input type="text" name="nome_reg" value="{{ $regiao->nome_reg }}"><br>
    Descrição: <textarea name="desc_reg">{{ $regiao->desc_reg }}</textarea><br>
    <button type="submit">Atualizar</button>
</form>
<a href="{{ route('regiao.index') }}">Voltar</a>