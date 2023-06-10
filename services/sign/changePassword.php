<?php
if (isset($_POST['email']) && ($_POST['novaSenha'] == $_POST['confirmSenha']) && (($_POST['novaSenha'] != null) || ($_POST['novaSenha'] != '')))
{
    $userEmail = $_POST['email'];
    $newPassword = md5($_POST['novaSenha']);
    require_once('../connection.php');

    $sql_query = "SELECT * FROM USUARIO WHERE EMAIL = '{$userEmail}'";
    $result = $conn->query($sql_query);
    $data = mysqli_fetch_array($result);

    if ($data != null)
    {
        $handleUser = $data['HANDLE'];
        $sql_update_query = "UPDATE USUARIO
                                SET 
                                    SENHA = '{$newPassword}'
                                WHERE HANDLE = '{$handleUser}'";
        $conn->query($sql_update_query);
    }
    mysqli_close($conn);
    $_SESSION = array();
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/pages/menu.php');
} else {
    echo "O email informado não existe ou as senhas não conferem.";
}
?>
