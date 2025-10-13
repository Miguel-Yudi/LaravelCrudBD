<h1>Nova região</h1>
<form action="{{ route('regiao.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="nome_reg"><br>
    Descrição: <textarea name="desc_reg"></textarea><br>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('regiao.index') }}">Voltar</a>