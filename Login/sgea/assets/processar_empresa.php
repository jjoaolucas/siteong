<?php
// Inclua o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifique se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba os dados do formulário
    $nomeEmpresa = $_POST['nomeEmpresa'];
    $cnpj = $_POST['cnpj'];
    $emailEmpresa = $_POST['emailEmpresa'];
    $telefoneEmpresa = $_POST['telefoneEmpresa'];
    $endereco = $_POST['endereco'];
    $responsavel = $_POST['responsavel'];

    // Consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO empresas (nomeEmpresa, cnpj, emailEmpresa, telefoneEmpresa, endereco, responsavel) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar a consulta
    $stmt = $conexao->prepare($sql);

    // Verificar se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die('Erro na preparação da consulta: ' . $conexao->error);
    }

    // Vincular os parâmetros à consulta
    $stmt->bind_param('ssssss', $nomeEmpresa, $cnpj, $emailEmpresa, $telefoneEmpresa, $endereco, $responsavel);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "<script>
        alert('Empresa cadastrada com sucesso.');
        window.location.href = 'cadastro_empresa.php'; // Página de consulta de voluntários
    </script>";
    } else {
        // Erro na inserção
        echo "<script>
        alert('Erro ao cadastrar empresa: " . $stmt->error . "');
        window.location.href = 'cadastro_empresa.php'; // Página de consulta de voluntários
        </script>";
    }
} else {
    // Acesso não autorizado
    echo "Acesso não autorizado.";
}
