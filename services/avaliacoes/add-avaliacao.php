<?php
session_start();
if (isset($_SESSION['NOME']) && isset($_POST['nota_avaliacao']))
{
    require_once('../connection.php');
    $handleUser = $_SESSION['HANDLE'];
    $nota = $_POST['nota_avaliacao'];
    $comentario = $_POST['comentario'];
    
    $sql_query = "INSERT INTO AVALIACOES (COD_USUARIO, NOTA, COMENTARIO) VALUES ('{$handleUser}', '{$nota}', '{$comentario}')";
    $result = $conn->query($sql_query);
    
    mysqli_close($conn);
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/pages/avaliacao.php');
} else {
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
}
?>