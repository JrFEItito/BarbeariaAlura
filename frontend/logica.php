<?php

session_start();
include_once("conexao.php");

if (isset($_POST['Enviar'])) {
    $mensagem = mysqli_real_escape_string($conexao, $_POST['Mensagem']); // Escapar a mensagem para evitar SQL Injection
    $inserir = "INSERT INTO PDI_GitHub_Barbearia (MENSAGEM) VALUES ('$mensagem')"; // Removido valor vazio do ID
    $sql = mysqli_query($conexao, $inserir);
    
    if ($sql) {
        $_SESSION['Mensagem'] = "Mensagem enviada com sucesso!";
        header("Location: contato.html");
    } else {
        $_SESSION['Mensagem'] = "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        header("Location: contato.html");
    }
    exit(); 
}
?>

