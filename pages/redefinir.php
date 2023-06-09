<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Redefinir Senha - Sistema de Pedidos</title>
</head>

<body>
    <button type="button" class="backButton">
        <a href="..\login.php"><img src="../img/arrow.png" alt="Back Button" /></a>
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
        <div class="container_redefine">
            <div class="card_redefine">
                <h1 class="card_redefine_title">Redefinir Senha</h1>
                <form method="post" class="card_redefine_form">
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="senha">Nova Senha</label>
                        <input type="password" name="novaSenha" id="novaSenha" placeholder="Digite sua nova senha"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="confirmSenha">Confirme sua Nova Senha</label>
                        <input type="password" name="confirmSenha" id="confirmSenha"
                            placeholder="Confirme sua nova senha" class="form_group_input" required>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_redefine" name="cadastrar">Redefinir</button>
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