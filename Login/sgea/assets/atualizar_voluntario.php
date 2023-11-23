<?php
// Conectar ao banco de dados (ajuste as credenciais conforme necessário)
$conexao = mysqli_connect('localhost', 'root', '', 'ongaumigos');

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];

    // Query para atualizar os dados do voluntário
    $query = "UPDATE voluntarios SET nome = '$nome', cpf = '$cpf', email = '$email', senha = '$senha', telefone = '$telefone', rua = '$rua', numero = '$numero', bairro = '$bairro', cep = '$cep', cidade = '$cidade' WHERE id = $id";

    if ($conexao->query($query) === TRUE) {
        echo "<script>
            alert('Dados do voluntário atualizado com sucesso.');
            window.location.href = 'consultar_voluntario.php'; // Página de consulta de voluntários
        </script>";
    } else {
        // Erro na exclusão
        echo "<script>
            alert('Erro ao editar dados do voluntário: " . $conexao->error . "');
            window.location.href = 'consultar_voluntario.php'; // Página de consulta de voluntários
        </script>";
    }
} else {
    // Acesso não autorizado
    echo "Acesso não autorizado.";
}
?>
