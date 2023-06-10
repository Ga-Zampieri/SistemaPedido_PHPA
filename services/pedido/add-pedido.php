<?php
    session_start();  
    if (!isset($_SESSION['NOME']))
        header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
    else
    {
        require_once('..\connection.php');
        $status = "Aguardando";
        $user = $_SESSION['HANDLE'];

        $valorTotal = "SELECT SUM(VALOR) AS VALOR_TOTAL FROM CARRINHO WHERE COD_USUARIO = $user AND COMPRADO = 'N'";
        $select = $conn-> query($valorTotal);
        $data = mysqli_fetch_array($select);
        $valor = $data['VALOR_TOTAL'];

        $mysql_query = "INSERT INTO PEDIDO (CD_USUARIO, VALOR_PEDIDO, STATUS_PEDIDO) VALUES ('{$user}', '{$valor}', '{$status}')";
        $result = $conn->query($mysql_query);
        if ($result)
        {
            $msg = "insert-sucess";
            $msgerror = "";
        }
        else {
            $msg = "insert-error";
            $msgerror = $conn->error;
        }
        require('../carrinho/reset-carrinho.php');
        mysqli_close($conn);   
        header('Location: http://localhost/SistemaPedido_PHPA/pages/pedido.php');
    }
?>