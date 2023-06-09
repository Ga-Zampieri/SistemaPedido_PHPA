<?php
session_start(); 
if (isset($_POST['cadastrarPrato']))
{
    $_POST;
    require_once('..\connection.php');
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imgPrato'];
    $valor = $_POST['valorPrato'];

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
    header('Location: http://localhost/SistemaPedido_PHPA/pages/cardapio.php');
}

?>