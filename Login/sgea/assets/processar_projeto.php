<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nomeProjeto = $_POST["nomeProjeto"];
    $descricaoProjeto = $_POST["descricaoProjeto"];
    $responsavelProjeto = $_POST["responsavelProjeto"];
    $dataInicio = $_POST["dataInicio"];
    $dataTermino = $_POST["dataTermino"];
    $previsaoGasto = $_POST["previsaoGasto"];

    // Verifique se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
        die("Conexão com o banco de dados falhou: " . $conexao->connect_error);
    }

    // Prepare a instrução SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO projetos (nomeProjeto, descricaoProjeto, responsavelProjeto, dataInicio, dataTermino, previsaoGasto)
    VALUES (?, ?, ?, ?, ?, ?)";

    // Verifique se a preparação da consulta foi bem-sucedida
    $stmt = $conexao->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    // Liga os parâmetros à consulta
    $stmt->bind_param("sssssd", $nomeProjeto, $descricaoProjeto, $responsavelProjeto, $dataInicio, $dataTermino, $previsaoGasto);

    // Execute a consulta
    if ($stmt->execute()) {
        echo "<script>
            alert('Projeto Cadastrado com sucesso.');
            window.location.href = 'cadastro_projeto.php'; // Página de consulta de voluntários
        </script>";
    } else {
        // Erro na inserção
        echo "<script>
            alert('Erro ao cadastrar projeto: " . $stmt->error . "');
            window.location.href = 'cadastro_projeto.php'; // Página de consulta de voluntários
        </script>";
    }

    // Feche a consulta
    $stmt->close();
    // Feche a conexão com o banco de dados
    $conexao->close();
} else {
    // Acesso não autorizado
    echo "Acesso não autorizado.";
}
?>
