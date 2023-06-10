<?php 
    session_start();  
    if (!isset($_SESSION['NOME']))
        header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
    else
    {
        require_once('..\connection.php');
        if (isset($_GET['id']))
        {
            $handle = $_GET['id'];
            $mysql_query = "UPDATE CARDAPIO 
                                SET ATIVO = 'N'
                                WHERE HANDLE = '{$handle}'";
            $result = $conn->query($mysql_query);
            if ($result)
            {
                $msg = "delete-sucess";
                $msgerror = "";
            }
            else {
                $msg = "delete-error";
                $msgerror = $conn->error;
            }
        }
        mysqli_close($conn);
        header('Location: http://localhost/SistemaPedido_PHPA/pages/cardapio.php');
    }
?>