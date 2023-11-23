<?php
include 'conexao.php';
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nomeCao = $_POST["nomeCao"];
    $racaCao = $_POST["racaCao"];
    $sexoCao = $_POST["sexoCao"];
    $idadeCao = $_POST["idadeCao"];
    $pesoCao = $_POST["pesoCao"];
    $pelagemCao = $_POST["pelagemCao"];
    $saudeCao = $_POST["saudeCao"];
    $comportamentoCao = $_POST["comportamentoCao"];
    $historiaCao = $_POST["historiaCao"];
    $fotosCao = $_POST["fotosCao"];
    // $videosCao = $_POST["videosCao"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO animais (nomeCAo, racaCao, sexoCao, idadeCao, pesoCao, pelagemCao, saudeCao, comportamentoCao, historiaCao, fotosCao)
            VALUES ('$nomeCao', '$racaCao', '$sexoCao', '$idadeCao', '$pesoCao', '$pelagemCao', '$saudeCao', '$comportamentoCao', '$historiaCao', '$fotosCao')";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>
        alert('Cachorrinho cadastrado  com sucesso.');
        window.location.href = 'cadastro_cao.php'; // Página de consulta de voluntários
    </script>";
} else {
    // Erro na exclusão
    echo "<script>
        alert('Erro ao cadastrar cachorrinho: " . $conexao->error . "');
        window.location.href = 'cadastro_cao.php'; // Página de consulta de voluntários
    </script>";
}
} else {
// Acesso não autorizado
echo "Acesso não autorizado.";
}
?>
