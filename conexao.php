<?php
$servidor = 'localhost';
$banco = 'contato-mathshow';
$usuario = 'mathshow';
$senha = 'x2COSegotcR4M97X';

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn)
{
echo "erro ao conectar ao banco de dados!";exit();
}
?>