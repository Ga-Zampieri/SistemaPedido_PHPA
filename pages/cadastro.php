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
        <a href="..\login.php"><img src="../img/arrow.png" alt="Back Button" /></a>
    </button>
    <div class="dropdown">
        <div class="dropdown_user">
            <img src="../img/avatar.png" class="dropdown_user_image" alt="User Avatar" />
            <span class="dropdown_user_name">
                <?php 
                if (isset($_SESSION['NOME']))
                {
                    echo $_SESSION['NOME'];
                } else
                    echo "Login";
            ?></span>
        </div>
        <div class="dropdown-content">
            <a class="btn_logout" href="../services/login/logoutScript.php">Logout</a>
        </div>
    </div>
    <main>
        <div class="container_sign">
            <div class="card_sign">
                <h1 class="card_sign_title">Sign In</h1>
                <form method="post" action="../services/sign/newUser.php" class="card_sign_form ">
                    <div class="form_group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form_group_input"
                            required>
                    </div>
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" name="dataNascimento" id="dataNascimento" class="form_group_input date"
                            required>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_sign" name="cadastrar">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>