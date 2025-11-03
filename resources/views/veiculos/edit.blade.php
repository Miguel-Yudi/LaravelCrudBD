<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regiões | MeuSite</title>
  <link rel="stylesheet" href="{{ asset('css/veiculos.css') }}">
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

  <main class="main-content">
    <div class="parte1">
      <h1>Editor de Veiculos</h1>
    </div>

    <form action="{{ route('veiculos.update', $veiculo->id_veiculo) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="parte2">
      <h2>Editar Veiculo</h2>

      <div class="input-group">
        <label for="id">Código:</label>
        <input type="text" id="id" placeholder="Digite o modelo do veículo" name="id_veiculo" value="{{ $veiculo->id_veiculo }}" readonly>
      </div>

      <div class="input-group">
        <label for="nome">Modelo:</label>
        <input type="text" id="nome" placeholder="Digite o modelo do veículo" name="modelo_veiculo" value="{{ $veiculo->modelo_veiculo }}">
      </div>

      <div class="input-group">
        <label for="codigo">Placa:</label>
        <input type="text" id="codigo" placeholder="Digite a placa do veículo" name="placa_veiculo" value="{{ $veiculo->placa_veiculo }}">
      </div>

      <div class="input-group">
        <label for="marca">Descrição:</label>
        <input type="text" id="marca" placeholder="Digite a descrição do veículo" name="desc_veiculo" value="{{ $veiculo->desc_veiculo }}">
      </div>

      <div class="input-group">
        <label for="placa">Ativo:</label>
        <input type="text" id="placa" placeholder="Veículo ativo?" name="ativo" value="{{ $veiculo->ativo }}">
      </div>

    <!--
    🔹 Nova seção de exibição logo abaixo dos inputs 
    <section class="parte4" id="exibicao-regiao">
      <h2>Veiculo Selecionado</h2>
      <div class="regiao-card">
        Para a imagem aparecer tire o display none na linha a baixo
        <img id="imagem-preview" src="../../images/imagem_rosa.png" alt="Imagem da região" style="display: none;">
        <p><strong>Nome:</strong> <span id="nome-exibido">—</span></p>
        <p><strong>Código:</strong> <span id="codigo-exibido">—</span></p>
      </div>
    </section>
    -->
    <div class="parte3">
      <a href="veiculos"><p>Veiculo já existe?</p></a>
      <button id="editar-btn" type="submit">Editar</button>
    </div>
  </main>
  </form>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
