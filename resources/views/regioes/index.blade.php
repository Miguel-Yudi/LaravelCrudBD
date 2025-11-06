<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regiões | MeuSite</title>
  <link rel="stylesheet" href="{{ asset('css/regioes.css') }}">
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Beleza</div>
        <ul class="nav-menu">
            <li><a href="../produtos">Produtos</a></li>
            <li><a href="../clientes/">Clientes</a></li>
            <li><a href="../vendedores">Vendedores</a></li>
            <li><a href="../home/index.html">Veículos</a></li>
        </ul>
        <button type="button" class="hamburger" id="hamburger" aria-label="Abrir menu de navegação" title="Abrir menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </nav>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Menu Lateral -->
    <div class="sidebar" id="sidebar">
        <button type="button" class="close-btn" id="closeBtn" aria-label="Fechar menu"
            title="Fechar menu">&times;</button>
        <div class="sidebar-header">
            <h2>Menu</h2>
        </div>
        <ul class="menu-items">
            <li><a href="../home">🏠 Início</a></li>
            <li><a href="../produtos">👤 Produtos</a></li>
            <li><a href="../clientes">💼 Clientes</a></li>
            <li><a href="../vendedores">📁 Vendedores</a></li>
            <li><a href="index.html">📝 Região</a></li>
        </ul>
    </div>

  <!-- Conteúdo Principal -->
  <main class="main-content">
    <!-- Título -->
    <div class="parte1">
      <h1>Região</h1>
    </div>

    <!-- Formulário -->
    <div class="parte2">
      <h2>Procurar Região</h2>

      <form method="GET" action="{{ route('regioes.index') }}">
      <div class="input-group">
        <label for="nome">Pesquisa:</label>
        <input type="text" id="nome" name="busca" placeholder="Digite o nome ou código da região" title="Nome da região">
      </div>

    </div>

    <!-- Botão inferior -->
    <div class="parte3">
      <a href="/regioes/cadastro">Região não existe?</a>
      <button type="submit" title="Cadastrar nova região">Procurar</button>
    </div>
    </form>

  <div class="tabela-ceps">
            <h2>Tabela de Regiões</h2>
            <table>
               <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($regioes as $regiao)
            <tr>
                <td>{{ $regiao->id_reg }}</td>
                <td>{{ $regiao->nome_reg }}</td>
                <td>{{ $regiao->desc_reg }}</td>
                <td><a href="{{ route('regioes.edit', $regiao) }}">Editar</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhuma região encontrada.</td>
            </tr>
        @endforelse
            </tbody>
            </table>
        </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
