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
                    <h2>Cadastro De Voluntário</h2>
                </div>
                <hr>
                <!-- CONTEUDO DO CADASTRO DE VOLUNTARIO -->
                <!-- CONTEUDO DO CADASTRO DE VOLUNTARIO -->
                <form action="processar_voluntario.php" method="post" class="mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="rua" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="rua" name="rua" required>
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="mb-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                    </div>
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" required>
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar Voluntário</button>
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