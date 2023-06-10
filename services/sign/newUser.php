<?php 
    require_once('..\connection.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $dt_nasc = $_POST['dataNascimento'];

    $mysql_query = "INSERT INTO USUARIO (NOME, EMAIL, SENHA, DT_NASCIMENTO, CD_TIPO_USUARIO, ATIVO) VALUES ('{$nome}', '{$email}', '{$senha}', '{$dt_nasc}', '1', 'S')";
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