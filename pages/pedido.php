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
    <title>Status do Pedido</title>
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
                        if (isset($_SESSION['NOME']))
                        {
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
        <div class="container_pedido">
            <div class="card_pedido">
                <h1 class="card_pedido_title">Pedidos</h1>
                <h3 class="card_pedido_label">Realizados:</h3>
                <div class="card_pedido_options">
                    <ul class="card_pedido_options_list">
                        <li class="card_pedido_options_list_item">
                            <?php
                            require_once('..\services\connection.php');
                            $user = $_SESSION['HANDLE'];

                            $sql = "SELECT * FROM PEDIDO WHERE CD_USUARIO = $user LIMIT 3";
                            $result = $conn->query($sql);
                            if ($result) {
                                $msg = "insert-sucess";
                                $msgerror = "";
                            } else {
                                $msg = "insert-error";
                                $msgerror = $conn->error;
                            }
                            mysqli_close($conn);
                            while ($data = mysqli_fetch_array($result)) {
                                ?>
                                <div class="card_pedido_item"><span>Status do Pedido:
                                        <?= $data['STATUS_PEDIDO'] ?>
                                    </span>Número do Pedido:
                                    <?= $data['HANDLE'] ?> <span>Valor do Pedido:
                                        <?= $data['VALOR_PEDIDO'] ?>
                                    </span>
                                </div>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
                <div class="pedido_options">
                    <a href="menu.php">
                        <button>
                            Menu
                        </button>
                    </a>
                    <a href="cardapio.php">
                        <button>
                            Cardápio
                        </button>
                    </a>
                    <a href="carrinho.php">
                        <button>
                            Carrinho
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>