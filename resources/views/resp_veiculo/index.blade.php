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
      <h1>Responsável</h1>
    </div>

    <form method="GET" action="{{ route('respVeiculo.index') }}"> 
    <!-- Formulário -->
    <div class="parte2">
      <h2>Procurar responsáveis</h2>
      <div class="input-group">
        <div class="flex">
          <label for="nome">Pesquisa:</label>
        <input type="text" id="nome" name="busca" placeholder="Digite o nome ou código da região" title="Nome da região">
        </div>
        <div class="flex">
          <label for="data">Data:</label>
          <input type="date" name="data" id="data">
        </div>
      </div>

    </div>

    <!-- Botão inferior -->
    <div class="parte3">
      <a href="resp_veiculo/cadastro"><p>Registro não existe?</p></a>
      <button type="submit" title="Cadastrar nova região">Procurar</button>
    </div>
    </form>
    

    <div class="tabela-ceps">
            <h2>Tabela de registros</h2>
            <table>
               <thead>
        <tr>
            <th>Código</th>
            <th>Vendedor</th>
            <th>Veiculo</th>
            <th>Data</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($resp_veiculos as $resp_veiculo)
            <tr>
                <td>{{ $resp_veiculo->id_resp_veiculo }}</td>
                <td>{{ $resp_veiculo->id_veiculo }}</td>
                <td>{{ $resp_veiculo->id_vend }}</td>
                <td>{{ $resp_veiculo->data }}</td>
                <td><a href="{{ route('respVeiculo.edit', $resp_veiculo) }}">Editar</a></td>
                <td>
                <form action="{{ route('respVeiculo.destroy', $resp_veiculo->id_resp_veiculo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este registro?')" class="delete">
                    Excluir
                    </button>
                </form>
                </td>
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

  <script src="{{ asset('jd/script.js') }}"></script>
</body>

</html>
