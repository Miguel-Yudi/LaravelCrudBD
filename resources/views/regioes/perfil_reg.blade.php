<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Menu Lateral</title>
    <link rel="stylesheet" href="regioes.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Beleza</div>
        <ul class="nav-menu">
            <li><a href="../produtos/procurar-produto.html">Produtos</a></li>
            <li><a href="../clientes/index.html">Clientes</a></li>
            <li><a href="../vendedores/index.html">Vendedores</a></li>
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
            <li><a href="../home/index.html">🏠 Início</a></li>
            <li><a href="../produtos/procurar-produto.html">👤 Produtos</a></li>
            <li><a href="../clientes/index.html">💼 Clientes</a></li>
            <li><a href="../vendedores/index.html">📁 Vendedores</a></li>
            <li><a href="index.html">📝 Região</a></li>
        </ul>
    </div>

    <!-- Conteúdo Principal -->
    <main class="main-content">
  <div class="parte1">
    <h1>Região</h1>
  </div>

  <section class="regiao-container">
    <div class="regiao-card">
      <img src="../../images/imagem_rosa.png" alt="Imagem da região">
      <p class="regiao-nome">Nome<br><span>(ícone de maps)</span></p>
    </div>

    <div class="regiao-info">
      <p><strong>Nome:</strong> São Paulo</p>
      <p><strong>Código:</strong> SP01</p>
    </div>
  </section>

  <div class="parte3">
     <p>Região já existe?</p>
    <button>Editar</button>
  </div>
</main>

    <script src="script.js"></script>
</body>
</html>