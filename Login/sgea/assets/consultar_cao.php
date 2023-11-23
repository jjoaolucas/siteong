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
        text-decoration: none;
        margin-left: 1px;
    }

    .sort-link:hover {
        text-decoration: underline;
        color: dimgray;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end vh-100 shadow-sm">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0">
                        <!-- Código PHP para saudação e data -->
                        <div class="p-2">
                            <?php
                            date_default_timezone_set('America/Sao_Paulo');
                            $hora = date('H');

                            if ($hora >= 5 && $hora < 12) {
                                $saudacao = 'Bom dia';
                            } elseif ($hora >= 12 && $hora < 18) {
                                $saudacao = 'Boa tarde';
                            } else {
                                $saudacao = 'Boa noite';
                            }

                            $data = date('d/m/Y');
                            $diaSemana = date('l');

                            $traducaoDias = array(
                                'Monday' => 'segunda-feira',
                                'Tuesday' => 'terça-feira',
                                'Wednesday' => 'quarta-feira',
                                'Thursday' => 'quinta-feira',
                                'Friday' => 'sexta-feira',
                                'Saturday' => 'sábado',
                                'Sunday' => 'domingo'
                            );

                            $diaSemana = $traducaoDias[$diaSemana];

                            echo $saudacao . ', hoje é ' . $diaSemana . ', ' . $data;
                            ?>
                        </div>
                        <ul class="list-group">
                            <!-- Menu -->
                            <li class="list-group-item" aria-current="false">
                                <a href="#" class="text-decoration-none text-white">Inbox</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none text-black">
                                    <h5>Menu</h5>
                                </a>
                            </li>
                            <li class="list-group-item active" aria-current="true">
                                <a href="index.php" class="text-decoration-none text-black">
                                    <i class="bi bi-house"> Home</i>
                                </a>
                            </li>
                            <!-- Dropdown de Cadastro -->
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
                            <!-- Dropdown de Consulta -->
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
                <div class="col-12 mt-5 align-items-center">
                    <form method="GET" action="pesquisa_animal.php">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Pesquisar por ID, Nome, Raça, Sexo, Idade, Peso ou Pelagem" aria-label="Pesquisar" aria-describedby="basic-addon2">
                            <button class="btn btn-primary" type="submit">Pesquisar</button>
                        </div>
                    </form>
                    <table class="table table-striped">
                        <thead class="table btn-primary">
                            <tr>
                                <!-- Colunas para ordenação -->
                                <th style="width: 8%;">ID <a href="?order=id_asc" class="sort-link">&#9650;</a> <a href="?order=id_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 20%;">Nome <a href="?order=nome_asc" class="sort-link">&#9650;</a> <a href="?order=nome_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Raça <a href="?order=raca_asc" class="sort-link">&#9650;</a> <a href="?order=raca_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Sexo <a href="?order=sexo_asc" class="sort-link">&#9650;</a> <a href="?order=sexo_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Idade <a href="?order=idade_asc" class="sort-link">&#9650;</a> <a href="?order=idade_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Peso <a href="?order=peso_asc" class="sort-link">&#9650;</a> <a href="?order=peso_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Pelagem <a href="?order=pelagem_asc" class="sort-link">&#9650;</a> <a href="?order=pelagem_desc" class="sort-link">&#9660;</a></th>
                                <th style="width: 10%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Conectar ao banco de dados (ajuste as credenciais conforme necessário)
                            $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                            if ($conexao->connect_error) {
                                die("Falha na conexão: " . $conexao->connect_error);
                            }

                            $order = "id_asc";

                            if (isset($_GET['order'])) {
                                $order = $_GET['order'];
                            }

                            $order_column = "id";
                            $order_direction = "ASC";

                            if ($order == "id_desc") {
                                $order_direction = "DESC";
                            } elseif ($order == "nome_asc") {
                                $order_column = "nomeCao";
                            } elseif ($order == "nome_desc") {
                                $order_column = "nomeCao";
                                $order_direction = "DESC";
                            } elseif ($order == "raca_asc") {
                                $order_column = "racaCao";
                            } elseif ($order == "raca_desc") {
                                $order_column = "racaCao";
                                $order_direction = "DESC";
                            } elseif ($order == "sexo_asc") {
                                $order_column = "sexoCao";
                            } elseif ($order == "sexo_desc") {
                                $order_column = "sexoCao";
                                $order_direction = "DESC";
                            } elseif ($order == "idade_asc") {
                                $order_column = "idadeCao";
                            } elseif ($order == "idade_desc") {
                                $order_column = "idadeCao";
                                $order_direction = "DESC";
                            } elseif ($order == "peso_asc") {
                                $order_column = "pesoCao";
                            } elseif ($order == "peso_desc") {
                                $order_column = "pesoCao";
                                $order_direction = "DESC";
                            } elseif ($order == "pelagem_asc") {
                                $order_column = "pelagemCao";
                            } elseif ($order == "pelagem_desc") {
                                $order_column = "pelagemCao";
                                $order_direction = "DESC";
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
                                $termo_pesquisa = $conexao->real_escape_string($_GET['search']);

                                $consulta = "SELECT id, nomeCao, racaCao, sexoCao, idadeCao, pesoCao, pelagemCao 
                                             FROM animais
                                             WHERE id = '$termo_pesquisa' 
                                             OR nomeCao LIKE '%$termo_pesquisa%' 
                                             OR racaCao = '$termo_pesquisa' 
                                             OR sexoCao = '$termo_pesquisa'
                                             OR idadeCao = '$termo_pesquisa'
                                             OR pesoCao = '$termo_pesquisa'
                                             OR pelagemCao LIKE '%$termo_pesquisa'";
                            } else {
                                $consulta = "SELECT id, nomeCao, racaCao, sexoCao, idadeCao, pesoCao, pelagemCao FROM animais ORDER BY $order_column $order_direction";
                            }

                            $resultado = $conexao->query($consulta);

                            if ($resultado->num_rows > 0) {
                                while ($linha = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $linha["id"] . "</td>";
                                    echo "<td>" . $linha["nomeCao"] . "</td>";
                                    echo "<td>" . $linha["racaCao"] . "</td>";
                                    echo "<td>" . $linha["sexoCao"] . "</td>";
                                    echo "<td>" . $linha["idadeCao"] . "</td>";
                                    echo "<td>" . $linha["pesoCao"] . "</td>";
                                    echo "<td>" . $linha["pelagemCao"] . "</td>";
                                    echo '<td>
                                            <a href="editar_animal.php?id=' . $linha["id"] . '"><i class="fas fa-edit" style="color: green;"></i></a>
                                            <a href="excluir_animal.php?id=' . $linha["id"] . '"><i class="fas fa-trash" style="color: red;"></i></a>
                                          </td>';
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Nenhum animal encontrado.</td></tr>";
                            }

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
