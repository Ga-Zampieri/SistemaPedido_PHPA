<?php
session_start();
if (!isset($_SESSION['NOME']))
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php')
        ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="..\style.css">
        <title>Perfil - Sistema de Pedidos</title>
    </head>

    <body>
        <button type="button" class="backButton">
            <a href=".\menu.php"><img src="../img/arrow.png" alt="Back Button" /></a>
        </button>
        <div class="dropdown">
            <div class="dropdown_user">
                <img src="../img/avatar.png" class="dropdown_user_image" alt="User Avatar" />
                <a href="./perfil.php">
                    <span class="dropdown_user_name">
                    <?php
if (isset($_SESSION['NOME'])) {
    echo $_SESSION['NOME'];
} else
    echo "Login";
?>
                </span>
            </a>
        </div>
        <div class="dropdown-content">
            <a class="btn_logout" href="../services/login/logoutScript.php">Logout</a>
        </div>
    </div>
    <main>
        <div class="container_perfil">
            <div class="card_perfil">
                <h1 class="card_perfil_title">Perfil</h1>
                <div class="card_perfil_form">
                    <div class="card_perfil_nome">
                        <h3>Nome</h3>
                        <p>
                            <?= $_SESSION['NOME'] ?>
                        </p>
                    </div>
                    <div class="card_perfil_email">
                        <h3>Email</h3>
                        <p>
                            <?= $_SESSION['EMAIL'] ?>
                        </p>
                    </div>
                    <div class="card_perfil_dataNasc">
                        <h3>Data de Nascimento</h3>
                        <p>
                            <?= $_SESSION['DT_NASCIMENTO'] ?>
                        </p>
                    </div>
                    <div class="form_group entrar">
                        <button type="button" class="btn_sign" name="atualizarPerfil"><a
                                href=".\atualizarPerfil.php">Atualizar Perfil</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>