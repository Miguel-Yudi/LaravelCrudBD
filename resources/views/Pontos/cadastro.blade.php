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
      <h1>Cadastro de Pontos</h1>
    </div>
    <form action="{{ route('pontos.store') }}" method="POST">
      @csrf
    <div class="parte2">
      <h2>Cadastrar Ponto</h2>

      <div class="input-group">
        <label for="nome">Região:</label>
        <input type="text" id="nome" placeholder="Digite a região a qual o ponto pertence" name="id_reg">
      </div>

      <div class="input-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="Digite o nome do ponto" name="nome_pon">
      </div>

      <div class="input-group">
        <label for="desc">Descrição:</label>
        <input type="text" id="desc" placeholder="Digite a descrição do ponto" name="desc_pon">
      </div>

      <div class="input-group">
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" placeholder="Digite o endereço do ponto" name="endereco_pon">
      </div>

    <div class="parte3">
      <a href="/pontos">Ponto já existe?</a>
      <button type="submit">Cadastrar</button>
    </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
