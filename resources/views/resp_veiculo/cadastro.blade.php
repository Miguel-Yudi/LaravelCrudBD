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
      <h1>Cadastro de responsavel</h1>
    </div>

    @if(session('success'))
      <p style="color: green; font-weight: bold;">
     {{ session('success') }}
    </p>
  @endif

  @if($errors->any())
    <ul style="color: red; font-weight: bold;">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
  @endif

    <form action="{{ route('respVeiculo.store') }}" method="POST">
    @csrf
    <div class="parte2">
      <h2>Cadastrar responsavel</h2>

      <div class="input-group flex">
        <label for="codigo_res">Código do vendedor:</label>
        <input type="text" id="codigo_res" placeholder="Digite o código do vendedor" name="id_vend">
      </div>

      <div class="input-group flex">
        <label for="veiculo">Código do veiculo:</label>
        <input type="text" id="veiculo" placeholder="Digite o código do veiculo" name="id_veiculo">
      </div>

      <div class="input-group flex">
        <label for="imagem">Data:</label>
        <input type="date" id="imagem" name="data">
      </div>
    </div>

    <div class="parte3">
      <a href="/respVeiculo"><p>Registro já existe?</p></a>
      <button type="submit">Cadastrar</button>
    </div>
    </form>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
