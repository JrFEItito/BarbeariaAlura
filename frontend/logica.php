<?php
session_start();
include_once("conexao.php");

if(isset($_POST['Enviar'])){
    $mensagem = $_POST['Mensagem']; // Corrigido o nome do campo
    $inserir = "INSERT INTO PDI_GitHub_Barbearia(ID, MENSAGEM) VALUES ('','$mensagem')"; // Corrigido a concatenação da variável $mensagem
    $sql = mysqli_query($conexao, $inserir);
    if($sql) {
        $_SESSION['Mensagem'] = "Mensagem enviada com sucesso!";
        header("Location: contato.html");
    } else {
        $_SESSION['Mensagem'] = "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        header("Location: contato.html");
    }
}
    
