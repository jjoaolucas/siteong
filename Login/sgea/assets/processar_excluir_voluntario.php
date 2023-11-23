<?php
// Conecte-se ao banco de dados (ajuste as credenciais conforme necessário)
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'ongaumigos';
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifique a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $voluntario_id = $_GET['id'];

    // Prepara a consulta para excluir o voluntário
    $consulta = "DELETE FROM voluntarios WHERE id = $voluntario_id";

    if ($conexao->query($consulta) === TRUE) {
        // Exclusão bem-sucedida
        echo "<script>
            alert('Voluntário excluído com sucesso.');
            window.location.href = 'consultar_voluntario.php'; // Página de consulta de voluntários
        </script>";
    } else {
        // Erro na exclusão
        echo "<script>
            alert('Erro ao excluir o voluntário: " . $conexao->error . "');
            window.location.href = 'consultar_voluntario.php'; // Página de consulta de voluntários
        </script>";
    }
} else {
    // Acesso não autorizado
    echo "Acesso não autorizado.";
}

// Feche a conexão com o banco de dados
$conexao->close();
?>
