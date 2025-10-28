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

  <main class="main-content">
    <div class="parte1">
      <h1>Cadastro de Regiões</h1>
    </div>
    <form action="{{ route('regiao.store') }}" method="POST">
      @csrf
    <div class="parte2">
      <h2>Cadastrar Região</h2>

      <div class="input-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="Digite o nome da região" name="nome_reg">
      </div>

      <div class="input-group">
        <label for="codigo">Descrição:</label>
        <input type="text" id="codigo" placeholder="Digite a descrição da região" name="desc_reg">
      </div>

    <div class="parte3">
      <a href="/regioes">Região já existe?</a>
      <button type="submit">Cadastrar</button>
    </div>
    </form>
  </main>

  <script src="script.js"></script>
</body>

</html>
