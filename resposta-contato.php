<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$result_msg_contato = "SELECT * FROM 'contato-mathshow' INSERT INTO mensagens_contatos(nome, email, mensagem, created) VALUES ('$nome', '$email', '$mensagem', NOW())";

$resultado_msg_contato= mysqli_query($conn, $result_msg_contato);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathShow | contato </title>
</head>
<body>
    
    <span><img src="images/logotipo/logo-mathshow.png" alt="logo mathshow" /></span>

    <h1> OBRIGADO PELO CONTATO! </h1>

    <button> <a href="index.html"> VOLTAR. </a> </button>

</body>
</html>