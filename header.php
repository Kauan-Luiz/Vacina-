<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
    exit();
}

$nomeUsuario = $_SESSION['nome_usuario'];
?>
<header>
        <div class="logo">
            <img src="img/logo.png" alt="" srcset="">
        </div>
        <div class="usuario">
            <p><?php echo htmlspecialchars($nomeUsuario); ?></p>
            <img src="img/usuario.png" alt="">  
        </div>
    </header>

<style>
header{
    position: static;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #1F1C1C;
    width: 100%;
    height: 15vh;
    color: #fff;
}

.logo img{
    width: 50%;
    padding: 10px;
}

.usuario{
    display: flex;
    align-items: center;
    padding: 10px;
}
.usuario img{
    width: 70px;
}

.usuario img:hover{
    width: 80px;
    
}
</style>