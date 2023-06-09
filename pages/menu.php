<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Menu Principal</title>
</head>

<body>
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
        <div class="container_menu">
            <div class="card_menu">
                <h1 class="card_menu_title">Menu</h1>
                <h3 class="card_menu_label">Bem Vindo! Escolha uma das opções</h3>
                <div class="card_menu_options">
                    <ul class="card_menu_options_list">
                        <li class="card_menu_options_list_item"><a href="cardapio.php"><button href="cardapio.php"
                                    class="menu_button">CARDÁPIO</button></a></li>
                        <li class="card_menu_options_list_item"><a href="pedido.php"><button
                                    class="menu_button">PEDIDOS</button></a></li>
                        <li class="card_menu_options_list_item"><a href="carrinho.php"><button
                                    class="menu_button">CARRINHO</button></a></li>
                        <li class="card_menu_options_list_item"><a href="avaliacao.php"><button
                                    class="menu_button">AVALIAÇÕES</button></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </main>
</body>

</html>