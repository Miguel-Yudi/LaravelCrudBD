<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Menu Lateral</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Beleza</div>
        <ul class="nav-menu">
            <li><a href="../produtos">Produtos</a></li>
            <li><a href="../clientes">Clientes</a></li>
            <li><a href="../vendedores">Vendedores</a></li>
            <li><a href="../veiculos">Veículos</a></li>
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

    <!-- Conteúdo Principal -->
    <main class="main-content">

        <div class="parte1">
            <img src="../../images/imagem_rosa.png" alt="Logo da Empresa" class="logo-empresa">
            <p>DCHMSUJBVBHMGAHCSUYUAJHSMFIOWOAJBVHYJHVGUWI*S&UJHFEIUAJHS</p>
        </div>

        <div class="parte2">

            <div class="selecao">
                <div class="selecao">
                    <div class="campo">
                        <label for="regiao">Região</label>
                        <select id="regiao" name="regiao">
                            <option>São Paulo</option>
                            <option>Rio de Janeiro</option>
                            <option>Minas Gerais</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="pontos">Pontos estratégicos</label>
                        <select id="pontos" name="pontos">
                            <option>Guarulhos</option>
                            <option>Campinas</option>
                            <option>Santos</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabela-ceps">
            <h2>Tabela de Municípios e CEPs</h2>
            <table>
                <thead>
                    <tr>
                        <th>Município / Localidade</th>
                        <th>Faixa de CEP / CEP exemplo</th>
                        <th>Estado / UF</th>
                        <th>Comentários / Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>São Paulo</td>
                        <td>01000-000 a 05999-999</td>
                        <td>SP</td>
                        <td>CEPs por logradouro na capital<br>Rua CEP +2<br>AOJESP +2</td>
                    </tr>
                    <tr>
                        <td>Osasco</td>
                        <td>06000-000 a 06299-999</td>
                        <td>SP</td>
                        <td>Faixa para cidade vizinha<br>Rua CEP +1</td>
                    </tr>
                    <tr>
                        <td>Carapicuíba</td>
                        <td>06300-000 a 06399-999</td>
                        <td>SP</td>
                        <td>Faixa da cidade de Carapicuíba<br>Komecialize Ajuda</td>
                    </tr>
                    <tr>
                        <td>Barueri</td>
                        <td>06400-000 a 06499-999</td>
                        <td>SP</td>
                        <td>Faixa usada em e-commerce para Barueri<br>Aletp - Alessandro Temperini +1</td>
                    </tr>
                    <tr>
                        <td>Guarulhos</td>
                        <td>07000-000 a 07399-999</td>
                        <td>SP</td>
                        <td>Faixa para cidade de Guarulhos<br>Aletp - Alessandro Temperini +2<br>Komecialize Ajuda +2
                        </td>
                    </tr>
                    <tr>
                        <td>Vila Mariana (SP – bairro)</td>
                        <td>04000-000 a 04099-999</td>
                        <td>SP</td>
                        <td>Faixa de CEP da zona Sul / Vila Mariana na capital<br>Prefeitura de São Paulo +1</td>
                    </tr>
                    <tr>
                        <td>Itaquera (SP – bairro)</td>
                        <td>08200-000 a 08299-999</td>
                        <td>SP</td>
                        <td>Faixa do bairro Itaquera na zona leste<br>My Web Solution +1</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>