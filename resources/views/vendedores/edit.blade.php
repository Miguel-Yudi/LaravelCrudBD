<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Menu Lateral</title>
    <link rel="stylesheet" href="{{ asset('css/vendedores.css')}}">
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
    <section class="vendedores">
      <h2 class="titulo">Vendedores</h2>

      <div class="form-section">
      
      <h3>Editar vendedor</h3>

        <form class="Vendedor" action="{{ route('vendedores.update', $vendedor->id_vend) }}" method="POST">
           @csrf
           @method('PUT')  
              <div class="campo">
                <label for="nome">Id:</label>
                <input type="text" id="nome" name="nome_vend" value="{{ $vendedor->id_vend }}" readonly>
              </div>

              <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome_vend" value="{{ $vendedor->nome_vend}}">
              </div>

              <div class="campo">
                <label for="nome">Id Região:</label>
                <input type="number" id="nome" name="id_reg" value="{{ $vendedor->id_reg }}">
              </div>

              <div class="campo">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco_vend" value="{{ $vendedor->endereco_vend }}">
              </div>

              <div class="campo">
                <label for="nasc">Nascimento:</label>
                <input type="date" id="nasc" name="nasc_vend" value="{{ $vendedor->nasc_vend }}">
              </div>

              <div class="campo">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email_vend" value="`{{ $vendedor->email_vend }}">
              </div>

              <div class="campo">
                <label for="tel">Telefone:</label>
                <input type="text" id="tel" name="tel_vend" value="{{ $vendedor->tel_vend }}">
              </div>

              <div class="campo">
                <label for="ativo">Ativo:</label>
                <input type="text" id="ativo" name="ativo" value="{{ $vendedor->ativo }}">
              </div>

          <button type="submit" class="btn-procurar">Salvar</button>
        </form>
      </div>
    </section>
  </main>

    <script src="script.js"></script>
</body>
</html>