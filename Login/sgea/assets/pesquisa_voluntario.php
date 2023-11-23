<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGEA | AUMIGOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b62a336882.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<style>
    .sort-link {
        color: #ffffff;
        /* Cor azul */
        text-decoration: none;
        /* Remove o sublinhado padrão */
        margin-left: 1px;
        /* Espaçamento entre a palavra e o botão */
    }

    .sort-link:hover {
        text-decoration: underline;
        color: dimgray;
        /* Sublinhado quando o mouse passa por cima */
    }
</style>

<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end vh-100 shadow-sm">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0">
                        <div class="p-2">
                            <?php
                            // Define o fuso horário
                            date_default_timezone_set('America/Sao_Paulo');

                            // Obtém o horário atual
                            $hora = date('H');

                            // Define a mensagem de saudação com base na hora
                            if ($hora >= 5 && $hora < 12) {
                                $saudacao = 'Bom dia';
                            } elseif ($hora >= 12 && $hora < 18) {
                                $saudacao = 'Boa tarde';
                            } else {
                                $saudacao = 'Boa noite';
                            }

                            // Obtém a data atual
                            $data = date('d/m/Y');
                            // Obtém o dia da semana
                            $diaSemana = date('l'); // l retorna o dia da semana por extenso

                            // Define um array associativo para traduzir os dias da semana para português
                            $traducaoDias = array(
                                'Monday' => 'segunda-feira',
                                'Tuesday' => 'terça-feira',
                                'Wednesday' => 'quarta-feira',
                                'Thursday' => 'quinta-feira',
                                'Friday' => 'sexta-feira',
                                'Saturday' => 'sábado',
                                'Sunday' => 'domingo'
                            );

                            // Traduz o dia da semana
                            $diaSemana = $traducaoDias[$diaSemana];

                            // Exibe a saudação e a data formatada
                            echo $saudacao . ', hoje é ' . $diaSemana . ', ' . $data;
                            ?>

                        </div>
                        <!-- <form class="d-flex p-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form> -->
                        <ul class="list-group"> <li class="list-group-item" aria-current="false"> <a href="#" class="text-decoration-none text-white">Inbox</a> </li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-black">
                                    
                                    <h5>Menu</h5>
                                </a></li>
                            <li class="list-group-item active" aria-current="true"> <a href="index.html" class="text-decoration-none text-black"> <i class="bi bi-house"> Home</i></a> </li>
                             <li class="list-group-item" aria-current="true">
                                <div class="dropdown">
                                <i class="bi bi-plus"></i><a class="dropdown-toggle text-decoration-none text-black" href="#" role="button" id="cadastroDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cadastrar
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="cadastroDropdown">
                                        <li><a class="dropdown-item" href="cadastro_voluntario.php">Voluntário</a></li>
                                        <li><a class="dropdown-item" href="cadastro_empresa.php">Empresa</a></li>
                                        <li><a class="dropdown-item" href="cadastro_projeto.php">Projeto</a></li>
                                        <li><a class="dropdown-item" href="cadastro_cao.php">Animais</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item dropdown">
                            <i class="bi bi-search"></i><a class="dropdown-toggle text-decoration-none text-black" href="#" role="button" id="consultaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Consultar
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="consultaDropdown">
                                    <li><a class="dropdown-item" href="consultar_voluntario.php">Voluntário</a></li>
                                    <li><a class="dropdown-item" href="consultar_empresa.php">Empresa</a></li>
                                    <li><a class="dropdown-item" href="consultar_projeto.php">Projeto</a></li>
                                    <li><a class="dropdown-item" href="consultar_cao.php">Animais</a></li>
                                </ul>
                            </li>

                            <!-- <li class="list-group-item"> <a href="#" class="text-decoration-none text-black">Blogs</a>
                            </li> -->
                             <li class="list-group-item" aria-current="false"> <a href="#" class="text-decoration-none text-white">Inbox</a> </li>
                            <!-- <li class="list-group-item"> <a href="#" class="text-decoration-none text-black">Settings</a> </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none"><i class="bi bi-list"></i></a>
                <div class="page-header pt-3 text-center">
                    <h2>Bem-vindo ao Sistema de Gerenciamento da ONG</h2>
                    <br>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Voluntários</h5>
                                <p class="card-text"><i class="bi bi-person mr-3"></i>
                                    <?php
                                    // Conexão com o banco de dados (substitua pelas suas informações)
                                    $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                                    // Verifica se a conexão foi bem-sucedida
                                    if (!$conexao) {
                                        die('Erro na conexão: ' . mysqli_connect_error());
                                    }

                                    // Consulta para obter a quantidade de voluntários no banco
                                    $query = "SELECT COUNT(*) as total_voluntarios FROM voluntarios";
                                    $result = mysqli_query($conexao, $query);

                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $total_voluntarios = $row['total_voluntarios'];
                                        echo $total_voluntarios;
                                    } else {
                                        echo "Erro na consulta: " . mysqli_error($conexao);
                                    }

                                    // Fecha a conexão com o banco de dados
                                    mysqli_close($conexao);
                                    ?>
                                </p>

                                <a href="#" class="btn btn-primary">Ver Lista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Projetos</h5>
                                <p class="card-text"><i class="bi bi-folder mr-3"></i>
                                    <?php
                                    // Conexão com o banco de dados (substitua pelas suas informações)
                                    $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                                    // Verifica se a conexão foi bem-sucedida
                                    if (!$conexao) {
                                        die('Erro na conexão: ' . mysqli_connect_error());
                                    }

                                    // Consulta para obter a quantidade de projetos no banco
                                    $query = "SELECT COUNT(*) as total_projetos FROM projetos";
                                    $result = mysqli_query($conexao, $query);

                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $total_projetos = $row['total_projetos'];
                                        echo $total_projetos;
                                    } else {
                                        echo "Erro na consulta: " . mysqli_error($conexao);
                                    }

                                    // Fecha a conexão com o banco de dados
                                    mysqli_close($conexao);
                                    ?>
                                </p>

                                <a href="#" class="btn btn-primary">Ver Lista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Empresas</h5>
                                <p class="card-text"><i class="bi bi-people mr-3"></i>
                                    <?php
                                    // Conectar ao banco de dados (ajuste as credenciais conforme necessário)
                                    $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                                    // Verificar a conexão
                                    if ($conexao->connect_error) {
                                        die("Falha na conexão: " . $conexao->connect_error);
                                    }

                                    // Consulta para recuperar a quantidade de voluntários na tabela "voluntarios"
                                    $consulta = "SELECT COUNT(*) as quantidade FROM empresas";

                                    $resultado = $conexao->query($consulta);

                                    if ($resultado->num_rows > 0) {
                                        $linha = $resultado->fetch_assoc();
                                        echo $linha["quantidade"];
                                    } else {
                                        echo "0";
                                    }

                                    $conexao->close();
                                    ?>
                                </p>
                                <a href="#" class="btn btn-primary">Ver Lista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-body text-start">
                                <h5 class="card-title">Animais</h5>
                                <p class="card-text"><i class="bi bi-paw mr-3"></i>
                                    <?php
                                    // Conexão com o banco de dados (substitua pelas suas informações)
                                    $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                                    // Verifica se a conexão foi bem-sucedida
                                    if (!$conexao) {
                                        die('Erro na conexão: ' . mysqli_connect_error());
                                    }

                                    // Consulta para obter a quantidade de cães no banco
                                    $query = "SELECT COUNT(*) as total_caes FROM animais";
                                    $result = mysqli_query($conexao, $query);

                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $total_caes = $row['total_caes'];
                                        echo $total_caes;
                                    } else {
                                        echo "Erro na consulta: " . mysqli_error($conexao);
                                    }

                                    // Fecha a conexão com o banco de dados
                                    mysqli_close($conexao);
                                    ?>
                                </p>
                                <a href="#" class="btn btn-primary">Ver Lista</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 align-items-center">
                    <form method="GET" action="pesquisa_voluntario.php">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Pesquisar por ID, Nome, CPF ou Telefone" aria-label="Pesquisar" aria-describedby="basic-addon2">
                            <button class="btn btn-primary" type="submit">Pesquisar</button>
                        </div>
                    </form>
                    <table class="table table-striped">
                        <thead class="table btn-primary">
                            <!-- <tr>
                                <th style="width: 8%;">ID <a href="?order=id_asc" class="sort-link">&#9650;</a> <a href="?order=id_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 25%;">Nome <a href="?order=nome_asc" class="sort-link">&#9650;</a> <a href="?order=nome_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Telefone</th>
                                <th style="width: 20%;">Cidade</th>
                                <th style="width: 10%;">Ações</th>
                            </tr> -->
                        </thead>
                        <tbody>
                            <?php
                            // Conectar ao banco de dados (ajuste as credenciais conforme necessário)
                            $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');
                            // Verifique a conexão
                            if ($conexao->connect_error) {
                                die("Falha na conexão: " . $conexao->connect_error);
                            }

                            // Lógica de pesquisa
                            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
                                $termo_pesquisa = $conexao->real_escape_string($_GET['search']);

                                // Consulta para buscar voluntários por ID, nome, CPF ou telefone
                                $consulta = "SELECT id, nome, telefone, cidade FROM voluntarios 
                 WHERE id = '$termo_pesquisa' OR nome LIKE '%$termo_pesquisa%' 
                 OR cpf = '$termo_pesquisa' OR telefone = '$termo_pesquisa'";

                                $resultado = $conexao->query($consulta);

                                if ($resultado->num_rows > 0) {
                                    echo "<table class='table table-striped'>
                <thead class='table btn-primary'>
                    <tr>
                        <th style='width: 10%;'>ID</th>
                        <th style='width: 30%;'>Nome</th>
                        <th style='width: 20%;'>Telefone</th>
                        <th style='width: 20%;'>Cidade</th>
                    </tr>
                </thead>
                <tbody>";

                                    while ($linha = $resultado->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $linha["id"] . "</td>";
                                        echo "<td>" . $linha["nome"] . "</td>";
                                        echo "<td>" . $linha["telefone"] . "</td>";
                                        echo "<td>" . $linha["cidade"] . "</td>";
                                        echo "</tr>";
                                    }

                                    echo "</tbody></table>";
                                } else {
                                    echo "<p>Nenhum voluntário encontrado com o termo de pesquisa: '$termo_pesquisa'</p>";
                                }
                            }

                            // Restante do código para listar todos os voluntários

                            // Feche a conexão com o banco de dados
                            $conexao->close();
                            ?>


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>