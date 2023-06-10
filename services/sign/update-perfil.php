<?php
session_start();
if (isset($_SESSION['NOME']) && isset($_POST))
{
    $newName = $_POST['novoNome'];
    $newEmail = $_POST['novoEmail'];
    $newPassword = md5($_POST['novaSenha']);
    $newDtNasc = $_POST['novaDataNascimento'];
    $handleUser = $_SESSION['HANDLE'];

    require_once('../connection.php');
    $sql_query = "UPDATE USUARIO 
                SET
                    NOME = '{$newName}',
                    EMAIL = '{$newEmail}',
                    SENHA = '{$newPassword}',
                    DT_NASCIMENTO = '{$newDtNasc}'
                WHERE HANDLE = '{$handleUser}'";
    $result = $conn->query($sql_query);
    mysqli_close($conn);
    $_SESSION = array();
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
}
?>
