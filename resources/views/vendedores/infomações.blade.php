<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Menu Lateral</title>
    <link rel="stylesheet" href="{{ asset('css/vendedores.css') }}">
</head>
<body>
     <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Beleza</div>
        <ul class="nav-menu">
            <li><a href="../produtos">Produtos</a></li>
            <li><a href="../clientes">Clientes</a></li>
            <li><a href="/vendedores">Vendedores</a></li>
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
            <li><a href="vendedores">📁 Vendedores</a></li>
            <li><a href="../regioes">📝 Região</a></li>
        </ul>
    </div>

    <!-- Conteúdo Principal -->
     <main class="main-content">
      <section class="vendedor-info">
        <h2 class="titulo">Vendedores</h2>

        <div class="info-container">
          <div class="card-vendedor">
            <img src="victor.jpg" alt="Foto do vendedor" class="foto-vendedor">
            <p class="nome">Victor Barcellos Schiavon</p>
            <p class="cargo">(vendedor)</p>
          </div>

          <div class="detalhes">
            <p class="cor"><strong>Email:</strong> Victor@gmail.com</p>
            <p class="cor"><strong>Telefone:</strong> 53 9000-00000</p>
            <p class="cor"><strong>Endereço:</strong> Pelotas, RS</p>
            <p class="cor"><strong>CPF:</strong> 000.000.000-00</p>
             <a href="EditarInfo.html" class="btn-editar">Editar</a>
          </div>
        </div>
      </section>
    </main>

    <script src="script.js"></script>
</body>
</html>

