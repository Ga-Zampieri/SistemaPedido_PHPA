<?php 
if(isset($_POST['entrar'])){
    $email = $_POST['email'];    
    $senha = /*PASSWORD_DEFAULT*/($_POST['senha']);    

    require_once('..\SistemaPedido_PHPA\connection.php');
    $mysql_query = "SELECT * FROM USUARIO WHERE EMAIL = '{$email}' AND SENHA = '{$senha}'";
    $result = $conn->query($mysql_query);
    $data = mysqli_fetch_array($result);
    if($result && $data != null) //comando sql executado.
    {
        if ($data['EMAIL'] == $email && $data['SENHA'] == /*PASSWORD_DEFAULT*/($senha) && $data['ATIVO'] == "S"){
            session_start();
            $_SESSION = $data;
            header('Location: .\menu.php');
        }
        elseif ($data['EMAIL'] == $email && $data['SENHA'] != $senha){
            //Senha incorreta
        }
        elseif ($data['Email'] == $email && $data['ATIVO'] == "N") {
            //Usuário Inativo, redefinir senha
        }
        else {
            //Usuário não encontrato, deseja registrar-se?
        }
    }
    mysqli_close($conn);
}
?>