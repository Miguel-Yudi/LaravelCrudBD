<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Menu Lateral</title>
    <link rel="stylesheet" href="veiculos.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo"><a href="../home/index.html">Beleza</a></div>
        <ul class="nav-menu">
           <li><a href="../produtos/procurar-produto.html">Produtos</a></li>
            <li><a href="../clientes/index.html">Clientes</a></li>
            <li><a href="../vendedores/index.html">Vendedores</a></li>
            <li><a href="../veiculos/index.html">Veículos</a></li>
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
            <li><a href="../veiculos/cadastrar_ve.html">Cadastrar Veiculo</a></li>
            <li><a href="../veiculos/cad_resp.html">Cadastrar responsavel</a></li>
            <li><a href="../veiculos/editar_ve.html">Editar Veiculo</a></li>
            <li><a href="../veiculos/editar_resp.html">Editar Responsavel</a></li>
            <li><a href="../veiculos/index.html">Procurar Veiculo</a></li>
            <li><a href="../veiculos/procurar_resp.html">Procurar Responsavel</a></li>
            <li><a href="../veiculos/perfil_ve.html">Perfil Veiculo</a></li>
            <li><a href="../veiculos/resp_veiculo.html">Perfil Responsavel</a></li>
        </ul>
    </div>

    <!-- Conteúdo Principal -->
    <main class="main-content">
  <div class="parte1">
    <h1>Veiculo</h1>
  </div>

  <section class="regiao-container">
    <div class="regiao-card">
      <img src="../../images/imagem_rosa.png" alt="Imagem da região">
      <p class="regiao-nome">Nome<br></p>
    </div>

    <div class="regiao-info">
      <p><strong>Nome:</strong>Bugatti Chiron Super Sport</p>
      <p><strong>Código:</strong>67</p>
      <p><strong>Marca:</strong>Bugatti</p>
      <p><strong>Placa:</strong>HEY-0067</p>
    </div>
  </section>

  <div class="parte3">
     <p>Veiculo já existe?</p>
    <button>Editar</button>
  </div>
</main>

    <script src="script.js"></script>
</body>
</html>