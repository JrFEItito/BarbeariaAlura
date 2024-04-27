<?php 


if(isset($_POST['mensagem'])){
    $mensagem = $_POST['mensagem'];
    $inserir = "INSERT INTO PDI_GitHub_Barbearia(ID, MENSAGEM) VALUES ('','$mensagem')";
    $sql = mysqli_query($conexao, $inserir);
}

?>