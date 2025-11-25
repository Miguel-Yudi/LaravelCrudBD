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
      <h1>Gerenciamento de responsável</h1>
    </div>

    <form action="{{ route('respVeiculo.update', $respVeiculo->id_resp_veiculo) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="parte2">
      <h2>Editar responsável</h2>

      <div class="input-group flex">
        <label for="codigo_resp_veiculo">Código do registro:</label>
        <input type="text" id="codigo_resp_veiculo" placeholder="Digite o código o responsável" name="id_resp_veiculo" value="{{ $respVeiculo ->id_resp_veiculo }}" readonly>
      </div>

      <div class="input-group flex">
        <label for="codigo_res">Código do responsável:</label>
        <input type="text" id="codigo_res" placeholder="Digite o código o responsável" name="id_vend" value="{{ $respVeiculo ->id_vend }}">
      </div>

      <div class="input-group flex">
        <label for="id_veiculo">Código do veículo:</label>
        <input type="text" id="id_veiculo" placeholder="Digite o código da veículo" name="id_veiculo" value="{{ $respVeiculo ->id_veiculo }}">
      </div>

      <div class="input-group flex">
        <label for="data">Data:</label>
        <input type="date" id="data" placeholder="Digite o código da veículo" name="data" value="{{ $respVeiculo ->data }}">
      </div>

    </div>

    <div class="parte3">
      <a href="/respVeiculo"><p>Registro já existe?</p></a>
      <button type="submit">Editar</button>
    </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
