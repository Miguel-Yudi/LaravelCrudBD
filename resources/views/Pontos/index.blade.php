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
      <h1>Pontos</h1>
    </div>

    <!-- Formulário -->
     <form method="GET" action="{{ route('pontos.index') }}">
    <div class="parte2">
      <h2>Procurar pontos</h2>

      <div class="input-group">
        <div class="flex">
           <label for="nome">Buscar pontos:</label>
          <input type="text" id="nome" name="busca" placeholder="Digite o código do ponto" title="Código do ponto">
        </div>
      </div>

    </div>

    <!-- Botão inferior -->
    <div class="parte3">
      <a href="pontos/cadastro"><p>Pontos não existe?</p></a>
      <button type="submit" title="Procurar">Procurar</button>
    </div>
    </form>


    <div class="tabela-ceps">
            <h2>Tabela de Pontos</h2>
            <table>
               <thead>
        <tr>
            <th>Código</th>
            <th>Código região</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Endereço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pontos as $ponto)
            <tr>
                <td>{{ $ponto->id_pon }}</td>
                <td>{{ $ponto->id_reg }}</td>
                <td>{{ $ponto->nome_pon }}</td>
                <td>{{ $ponto->desc_pon }}</td>
                <td>{{ $ponto->endereco_pon }}</td>
                <td><a href="{{ route('pontos.edit', $ponto) }}">Editar</a></td>
                <td>
                <form action="{{ route('pontos.destroy', $ponto->id_pon) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este ponto?')" class="delete">
                    Excluir
                    </button>
                </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum ponto encontrado.</td>
            </tr>
        @endforelse
            </tbody>
            </table>
        </div>
  </main>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
