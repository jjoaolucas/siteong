<?php
include 'conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
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

    // Hash seguro da senha
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Insira os dados na tabela de voluntários (substitua o nome da tabela conforme necessário)
    $sql = "INSERT INTO voluntarios (nome, cpf, email, senha, telefone, rua, numero, bairro, cep, cidade)
    VALUES ('$nome', '$cpf', '$email', '$senha_hashed', '$telefone', '$rua', '$numero', '$bairro', '$cep', '$cidade')";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>
            alert('Voluntário cadastrado  com sucesso.');
            window.location.href = 'index.php'; // Página de consulta de voluntários
        </script>";
    } else {
        // Erro na exclusão
        echo "<script>
            alert('Erro ao cadastrar voluntário: " . $conexao->error . "');
            window.location.href = 'cadastrar_voluntario.php'; // Página de consulta de voluntários
        </script>";
    }
} else {
    // Acesso não autorizado
    echo "Acesso não autorizado.";
}

    $conexao->close();
