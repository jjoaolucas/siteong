<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGEA | AUMIGOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

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
                            <li class="list-group-item active" aria-current="true"> <a href="index.php" class="text-decoration-none text-black"> <i class="bi bi-house"> Home</i></a> </li>
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
                    <h2>Cadastro De Projeto</h2>
                </div>
                <hr>
                <!-- CONTEUDO DO CADASTRO DE PROJETO -->
                <!-- CONTEUDO DO CADASTRO DE PROJETO -->
                <form action="processar_projeto.php" method="post" class="mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <label for="nomeProjeto" class="form-label">Nome do Projeto</label>
                        <input type="text" class="form-control" id="nomeProjeto" name="nomeProjeto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricaoProjeto" class="form-label">Descrição do Projeto</label>
                        <textarea class="form-control" id="descricaoProjeto" name="descricaoProjeto" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="responsavelProjeto" class="form-label">Responsável pelo Projeto</label>
                        <select class="form-select" id="responsavelProjeto" name="responsavelProjeto" required>
                            <option value="">Selecione o responsável</option>
                            <?php
                            // Conectar ao banco de dados (ajuste as credenciais conforme necessário)
                            $conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

                            // Verificar a conexão
                            if ($conexao->connect_error) {
                                die("Falha na conexão: " . $conexao->connect_error);
                            }

                            // Consulta para buscar os voluntários cadastrados
                            $consulta_voluntarios = "SELECT id, nome FROM voluntarios";
                            $resultado_voluntarios = $conexao->query($consulta_voluntarios);

                            if ($resultado_voluntarios->num_rows > 0) {
                                while ($voluntario = $resultado_voluntarios->fetch_assoc()) {
                                    echo "<option value='" . $voluntario['id'] . "'>" . $voluntario['nome'] . "</option>";
                                }
                            }

                            // Feche a conexão com o banco de dados
                            $conexao->close();
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dataInicio" class="form-label">Data de Início do Projeto</label>
                        <input type="date" class="form-control" id="dataInicio" name="dataInicio" required>
                    </div>
                    <div class="mb-3">
                        <label for="dataTermino" class="form-label">Previsão de Término do Projeto</label>
                        <input type="date" class="form-control" id="dataTermino" name="dataTermino" required>
                    </div>
                    <div class="mb-3">
                        <label for="previsaoGasto" class="form-label">Previsão de Gasto (R$)</label>
                        <input type="number" class="form-control" id="previsaoGasto" name="previsaoGasto" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Projeto</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                    <br>
                    <br>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>