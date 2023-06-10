<?php 
session_start();
if (!isset($_SESSION['NOME']))
{
    header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
}
$handlePrato = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Atualização de Prato - Sistema de Pedidos</title>
</head>

<body>
    <button type="button" class="backButton">
        <a href=".\cardapio.php"><img src="../img/arrow.png" alt="Back Button" /></a>
    </button>
    <div class="dropdown">
        <div class="dropdown_user">
            <img src="../img/avatar.png" class="dropdown_user_image" alt="User Avatar" />
            <a href="./perfil.php">
                <span class="dropdown_user_name">
                    <?php 
                        if (isset($_SESSION['NOME']))
                        {
                            if (strlen($_SESSION['NOME']) > 7)
                                echo substr($_SESSION['NOME'], 0, 7)."...";
                            else
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
        <div class="container_resignFood">
            <div class="card_resignFood">
                <h1 class="card_resignFood_title">Atualizar Prato</h1>
                <form method="post" action="..\services\food\update-food.php?id=<?=$handlePrato?>" class="card_resignFood_form">
                    <div class="form_group">
                        <label for="novoNomePrato">Novo nome do Prato</label>
                        <input type="text" name="novoNomePrato" id="novoNomePrato" placeholder="Digite o novo nome do Prato"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="novaDescricaoPrato">Nova Descrição do Prato</label>
                        <input type="text" name="novaDescricaoPrato" id="novaDescricaoPrato"
                            placeholder="Digite a nova descrição do Prato" class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="novaImgDivulgacao">Nova Imagem de Divulgação</label>
                        <input type="file" name="novaImgPrato" id="novaImgPrato" class="form_group_input imgPrato"
                            required>
                    </div>
                    <div class="form_group">
                        <label for="novoValorPrato">Novo Valor do Prato</label>
                        <input type="number" name="novoValorPrato" id="novoValorPrato" placeholder="Digite o novo valor"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_signFood" name="recadastrarPrato">Atualizar Prato</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>

</html>