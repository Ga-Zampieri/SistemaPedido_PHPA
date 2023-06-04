<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Sistema de Pedidos</title>
</head>
<body>
    <main>
        <div class="container_login">
            <div class="card_login">
                <h1 class="card_login_title">Log In</h1>
                <form method="post" class="card_login_form">
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email"  class="form_group_input" required>
                        </div>
                        <div class="form_group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form_group_input" required>
                            </div>
                            <div class="form_group entrar">
                                <button type="submit" class="btn_login" name="entrar">Entrar</button>    
                                </div>
                                <div class="form_group cadastro">
                                    <a href="cadastro.html" class="btn_login_cadastro">Cadastre-se</a>
                                    </div>
                </form>

            </div>
        </div>
    </main>
</body>
</html>
<?php
if (isset($_POST['entrar']))
    require('..\SistemaPedido_PHPA\services\login\loginScript.php');
?>