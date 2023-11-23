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
                            <h4>Sistema de Gerenciamento</h4>
                        </div>
                        <form class="d-flex p-2">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-black">
                                    Dashboard</a></li>
                            <li class="list-group-item" aria-current="true"> <a href="index.html"
                                    class="text-decoration-none text-black">Home</a> </li>
                            <li class="list-group-item active" aria-current="true">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-decoration-none text-black" href="#" role="button"
                                        id="cadastroDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cadastrar
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="cadastroDropdown">
                                        <li><a class="dropdown-item" href="cadastro_voluntario.html">Voluntário</a></li>
                                        <li><a class="dropdown-item" href="cadastro_empresa.html">Empresa</a></li>
                                        <li><a class="dropdown-item" href="cadastro_projeto.html">Projeto</a></li>
                                        <li><a class="dropdown-item" href="cadastro_cao.html">Animais</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item dropdown">
                                <a class="dropdown-toggle text-decoration-none text-black" href="#" role="button"
                                    id="consultaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Consultar
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="consultaDropdown">
                                    <li><a class="dropdown-item" href="consultar_voluntario.html">Voluntários</a></li>
                                    <li><a class="dropdown-item" href="consultar_empresa.html">Empresas</a></li>
                                    <li><a class="dropdown-item" href="consultar_projeto.html">Projetos</a></li>
                                    <li><a class="dropdown-item" href="consultar_cao.html">Animais</a></li>
                                </ul>
                            </li>

                            <li class="list-group-item"> <a href="#" class="text-decoration-none text-black">Blogs</a>
                            </li>
                            <li class="list-group-item" aria-current="false"> <a href="#"
                                    class="text-decoration-none text-white">Inbox</a> </li>
                            <li class="list-group-item"> <a href="#"
                                    class="text-decoration-none text-black">Settings</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                    class="border rounded-3 p-1 text-decoration-none"><i class="bi bi-list"></i></a>
                <div class="page-header pt-3">
                    <h2>Cadastro</h2>
                </div>
                <hr>

                <div class="mt-5">

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>