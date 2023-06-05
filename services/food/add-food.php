<?php
    session_start(); 
    require_once('..\SistemaPedido_PHPA\connection.php');
    $nome = $_SESSION['nome'];
    $descricao = $_SESSION['descricao'];
    $imagem = $_SESSION['imagem'];
    $valor = $_SESSION['valor'];

    $mysql_query = "INSERT INTO CARDAPIO (NOME, DESCRICAO, VALOR, IMAGEM) VALUES ('{$nome}', '{$descricao}', '{$valor}', '{$imagem}')";
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
    header('Location: http://localhost/SistemaPedido_PHPA/cardapio.php');
?>