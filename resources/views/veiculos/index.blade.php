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

  <!-- Conteúdo Principal -->
  <main class="main-content">
    <!-- Título -->
    <div class="parte1">
      <h1>Veiculos</h1>
    </div>

    <!-- Formulário -->
     <form method="GET" action="{{ route('veiculos.index') }}">
    <div class="parte2">
      <h2>Procurar Veiculos</h2>

      <div class="input-group">
        <div class="flex">
           <label for="nome">Buscar:</label>
          <input type="text" id="nome" name="busca" placeholder="Digite o modelo ou código do veiculo" title="Nome do Veiculo">
        </div>
      </div>

    </div>

    <!-- Botão inferior -->
    <div class="parte3">
      <a href="veiculos/cadastro"><p>Veiculo não existe?</p></a>
      <button type="submit" title="Cadastrar nova região">Procurar</button>
    </div>
    </form>


    <div class="tabela-ceps">
            <h2>Tabela de veiculos</h2>
            <table>
               <thead>
        <tr>
            <th>Código</th>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($veiculos as $veiculo)
            <tr>
                <td>{{ $veiculo->id_veiculo }}</td>
                <td>{{ $veiculo->modelo_veiculo }}</td>
                <td>{{ $veiculo->placa_veiculo }}</td>
                <td>{{ $veiculo->desc_veiculo }}</td>
                <td><a href="{{ route('veiculos.edit', $veiculo) }}">Editar</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhuma região encontrada.</td>
            </tr>
        @endforelse
            </tbody>
            </table>
        </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
