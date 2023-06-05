<?php
    session_start(); 
    require_once('..\SistemaPedido_PHPA\connection.php');
    $status = "Aguardando";
    $user = $_SESSION['HANDLE'];

    $valorTotal = "SELECT SUM(VALOR) AS VALOR_TOTAL FROM CARRINHO WHERE COD_USUARIO = $user";
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
    mysqli_close($conn);   
    header('Location: http://localhost/SistemaPedido_PHPA/pedido.php');
?>