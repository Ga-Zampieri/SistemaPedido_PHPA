<?php 
if (!isset($_SESSION['NOME']))
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
else
{
    require_once('..\connection.php');
    $mysql_query = "UPDATE CARRINHO 
                        SET
                            COMPRADO = 'S'
                        WHERE COD_USUARIO = '{$_SESSION['HANDLE']}'
                        ";
    $result = $conn->query($mysql_query);
    if ($result)
    {
        $msg = "update-sucess";
        $msgerror = "";
    }
    else {
        $msg = "update-error";
        $msgerror = $conn->error;
    }
    //conexão vai ser fechada quando voltar p/ outro arquivo.
}
?>