<?php 
if(isset($_POST['entrar'])){
    $email = $_POST['email'];    
    $senha = md5($_POST['senha']);    

    require_once('..\SistemaPedido_PHPA\services\connection.php');
    $mysql_query = "SELECT * FROM USUARIO WHERE EMAIL = '{$email}' AND SENHA = '{$senha}'";
    $result = $conn->query($mysql_query);
    $data = mysqli_fetch_array($result);
    if($result && $data != null) //comando sql executado.
    {
        if ($data['EMAIL'] == $email && $data['SENHA'] == $senha && $data['ATIVO'] == "S"){
            session_start();
            $_SESSION = $data;
            header('Location: ..\SISTEMAPEDIDO_PHPA\pages\menu.php');
        }
        elseif ($data['EMAIL'] == $email && $data['SENHA'] != $senha){
            echo "Senha incorreta";
        }
        elseif ($data['Email'] == $email && $data['ATIVO'] == "N") {
            echo "Usuário Inativo, redefinir senha";
        }
        else {
            echo "Usuário não encontrato, deseja registrar-se?";
        }
    }
    mysqli_close($conn);
}
?>