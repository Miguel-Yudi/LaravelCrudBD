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
    <section class="vendedores">
      <h2 class="titulo">Vendedores</h2>

      <div class="form-section">
        <h3>Procurar vendedor</h3>

        <form method="GET" action="{{ route('vendedor.index') }}" class="Vendedor">

              <div class="campo">
                <label for="nome">Pesquisa:</label>
                <input type="text" id="nome" name="busca" placeholder="Digite o nome ou código do vendedor" title="Nome do vendedor">
              </div>

            <button type="submit" class="btn-procurar">Procurar</button>
        </form>

        <!-- link para a outra página de cadastro -->
        <a href="vendedores/cadastro" class="link-cadastro">Vendedor não existe?</a>
      </div>
    </section>


    <div class="tabela-ceps">
            <h2>Tabela de Municípios e CEPs</h2>
            <table>
               <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Região</th>
            <th>Endereço</th>
            <th>Nascimento</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ativo</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($vendedores as $vendedor)
            <tr>
                <td>{{ $vendedor->id_vend }}</td>
                <td>{{ $vendedor->nome_vend }}</td>
                <td>{{ $vendedor->id_reg }}</td>
                <td>{{ $vendedor->endereco_vend }}</td>
                <td>{{ $vendedor->nasc_vend }}</td>
                <td>{{ $vendedor->email_vend }}</td>
                <td>{{ $vendedor->tel_vend }}</td>
                <td>{{ $vendedor->ativo }}</td>
                <td><a href="{{ route('vendedor.edit', $vendedor) }}">Editar</a></td>
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