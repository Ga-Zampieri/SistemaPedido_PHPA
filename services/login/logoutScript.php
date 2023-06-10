<?php
    session_start();
    if (isset($_SESSION['NOME']))
    {
        $_SESSION = array();
        header('Location: http://localhost/SistemaPedido_PHPA/login.php');
    }
?>
