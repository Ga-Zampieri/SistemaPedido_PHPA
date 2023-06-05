<?php 
    session_start();    
    require_once('..\SistemaPedido_PHPA\connection.php');
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = md5($_SESSION['senha']);
    $dt_nasc = $_SESSION['dataNascimento'];

    $mysql_query = "INSERT INTO USUARIO (NOME, EMAIL, SENHA, CD_TIPO_USUARIO, ATIVO) VALUES ('{$nome}', '{$email}', '{$senha}', '1', 'S')";
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
    header('Location: http://localhost/SistemaPedido_PHPA/login.php');
?>