<?php

session_start();
include_once("conexao.php");
// Ativar a exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['Enviar'])) {
    $mensagem = mysqli_real_escape_string($conexao, $_POST['Mensagem']); // Escapar a mensagem para evitar SQL Injection
    $inserir = "INSERT INTO PDI_GitHub_Barbearia (MENSAGEM) VALUES ('$mensagem')"; // Removido valor vazio do ID
    $sql = mysqli_query($conexao, $inserir);
    
    if ($sql) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.</p>";
    }
    exit(); 
?>


