<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Cadastro - Sistema de Pedidos</title>
</head>

<body>
    <button type="button" class="backButton">
        <a href=".\perfil.php"><img src="../img/arrow.png" alt="Back Button" /></a>
    </button>
    <div class="dropdown">
        <div class="dropdown_user">
            <img src="../img/avatar.png" class="dropdown_user_image" alt="User Avatar" />
            <span class="dropdown_user_name">Usuário</span>
        </div>
        <div class="dropdown-content">
            <a class="btn_logout">Logout</a>
        </div>
    </div>
    <main>
        <div class="container_sign">
            <div class="card_sign">
                <h1 class="card_sign_title">Atualizar Perfil</h1>
                <form method="post" class="card_sign_form">
                    <div class="form_group">
                        <label for="novoNome">Novo Nome</label>
                        <input type="text" name="novoNome" id="novoNome" placeholder="Digite seu novo nome"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="novoEmail">Novo Email</label>
                        <input type="email" name="novoEmail" id="novoEmail" placeholder="Digite seu novo email"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="novaSenha">Nova Senha</label>
                        <input type="password" name="novaSenha" id="novaSenha" placeholder="Digite sua nova senha"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="novaDataNascimento">Nova Data de Nascimento</label>
                        <input type="date" name="novaDataNascimento" id="novaDataNascimento"
                            class="form_group_input date" required>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_sign" name="cadastrar">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
<?php
if (isset($_POST['cadastrar'])) {
    session_start();
    $_SESSION = $_POST;
    require("../services/sign/newUser.php");
}
?>