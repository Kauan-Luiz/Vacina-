<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
include_once('../conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
$result = $conexao->query($sql);



    if(mysqli_num_rows($result) > 0 ){
        header('location: ../PaginaInicial.html');
        exit();
    }
    else{
        header('location: login.php');
        exit();
    }

}
else{
    header('location: login.php');
    exit();
}


?>