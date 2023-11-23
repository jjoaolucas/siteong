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
                    <h2>Cadastrar Animais</h2>
                </div>
                <hr>

                <form action="processar_cao.php" method="post" class="mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <label for="nomeCao" class="form-label">Nome do Animal</label>
                        <input type="text" class="form-control" id="nomeCao" name="nomeCao" required>
                    </div>
                    <div class="mb-3">
                        <label for="racaCao" class="form-label">Raça</label>
                        <input type="text" class="form-control" id="racaCao" name="racaCao" required>
                    </div>
                    <div class="mb-3">
                        <label for="sexoCao" class="form-label">Sexo</label>
                        <select class="form-select" id="sexoCao" name="sexoCao" required>
                            <option value="Macho">Macho</option>
                            <option value="Fêmea">Fêmea</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="idadeCao" class="form-label">Idade</label>
                        <input type="number" class="form-control" id="idadeCao" name="idadeCao" required placeholder="Anos">
                    </div>
                    <div class="mb-3">
                        <label for="pesoCao" class="form-label">Peso</label>
                        <input type="number" class="form-control" id="pesoCao" name="pesoCao" required>
                    </div>
                    <div class="mb-3">
                        <label for="pelagemCao" class="form-label">Pelagem</label>
                        <select class="form-select" id="pelagemCao" name="pelagemCao" required>
                            <option value="Baixa">Baixa</option>
                            <option value="Média">Média</option>
                            <option value="Longa">Longa</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="saudeCao" class="form-label">Saúde</label>
                        <textarea class="form-control" id="saudeCao" name="saudeCao" rows="4" required placeholder="Detalhes relevantes a saúde do animal..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="comportamentoCao" class="form-label">Comportamento</label>
                        <textarea class="form-control" id="comportamentoCao" name="comportamentoCao" rows="4" required placeholder="Agressivo? Brincalhão? Destruidor? "></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="historiaCao" class="form-label">História</label>
                        <textarea class="form-control" id="historiaCao" name="historiaCao" rows="4" required placeholder="Descreva a História do animal..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fotosCao" class="form-label">Fotos</label>
                        <input type="file" class="form-control" id="fotosCao" name="fotosCao" accept="image/*" multiple required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="videosCao" class="form-label">Vídeos</label>
                        <input type="file" class="form-control" id="videosCao" name="videosCao" accept="video/*" multiple required>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <!-- botão limpar formulário -->
                    <button type="reset" class="btn btn-danger">Limpar</button>
                    <br>
                    <br>

                </form>


            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>