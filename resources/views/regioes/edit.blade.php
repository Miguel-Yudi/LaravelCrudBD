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

  <main class="main-content">
    <div class="parte1">
      <h1>Editor de Regiões</h1>
    </div>

    <form action="{{ route('regioes.update', $regiao->id_reg) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="parte2">
      <h2>Editar Região</h2>

      <div class="input-group">
        <label for="nome_reg">Código:</label>
        <input type="text" name="id_reg" value="{{ $regiao->id_reg }}" placeholder="Digite o nome da região" readonly>
      </div>

      <div class="input-group">
        <label for="nome_reg">Nome:</label>
        <input type="text" name="nome_reg" value="{{ $regiao->nome_reg }}" placeholder="Digite o nome da região">
      </div>

      <div class="input-group">
        <label for="desc_reg">Descrição:</label>
        <input type="text" id="Descricao" placeholder="Digite o código da região" name="desc_reg" value="{{ $regiao->desc_reg }}">
      </div>
    </div>

    <!-- 🔹 Nova seção de exibição logo abaixo dos inputs -->
    <section class="parte4" id="exibicao-regiao">
      <h2>Região Selecionada</h2>
      <div class="regiao-card">
        <!--Para a imagem aparecer tire o display none na linha a baixo-->
        <img id="imagem-preview" src="../../images/imagem_rosa.png" alt="Imagem da região" style="display: none;">
        <p><strong>Nome:</strong> <span id="nome-exibido">—</span></p>
        <p><strong>Código:</strong> <span id="codigo-exibido">—</span></p>
      </div>
    </section>

    <div class="parte3">
      <p>Região já existe?</p>
      <button id="editar-btn">Editar</button>
    </div>
  </form>
  </main>

  <script>
    // Script para exibir os dados no card
    //Lógica de Vocês
  </script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
