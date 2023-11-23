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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Voluntário</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $voluntario_id = $_GET['id'];
        echo "<script>
                var confirmar = confirm('Tem certeza de que deseja excluir o voluntário?');
                if (confirmar) {
                    window.location.href = 'consultar_voluntario.php?id=$voluntario_id';
                } else {
                    window.location.href = 'consultar_voluntario.php'; // Página de consulta de voluntários
                }
              </script>";
    } else {
        echo "Acesso não autorizado.";
    }
    ?>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>