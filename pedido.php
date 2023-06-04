<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Status do Pedido</title>
</head>

<body>
    <main>
        <div class="container_pedido">
            <div class="card_pedido">
                <h1 class="card_pedido_title">Pedidos</h1>
                <h3 class="card_pedido_label">Realizados:</h3>
                <div class="card_pedido_options">
                    <ul class="card_pedido_options_list">
                        <li class="card_pedido_options_list_item">
                            <?php 
                                require_once('C:\Git\ProjetosPHP\SistemaPedido_PHPA\connection.php');
                                $user = $_SESSION['HANDLE'];
                            
                                $sql = "SELECT * FROM PEDIDO WHERE CD_USUARIO = $user";
                                $result = $conn->query($sql);
                                $data = mysqli_fetch_array($result);
                                if ($result && $data != null)
                                {
                                    $msg = "insert-sucess";
                                    $msgerror = "";
                                }
                                else {
                                    $msg = "insert-error";
                                    $msgerror = $conn->error;
                                }
                                mysqli_close($conn);                           
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                            <div class="card_pedido_item"><span>Status do Pedido: <?= $data['STATUS_PEDIDO']?></span>Número do Pedido: <?= $data['HANDLE']?> <span>Valor do Pedido: <?=$data['VALOR_PEDIDO'] ?> </span></div>
                            <?php }?>
                        </li>
                    </ul>
                </div>
                <a href="..\SistemaPedido_PHPA\menu.php">
                    <button>
                        Menu
                    </button>
                </a>
                <a href="..\SistemaPedido_PHPA\cardapio.php">
                    <button>
                        Cardápio
                    </button>
                </a>
                <a href="..\SistemaPedido_PHPA\cardapio.php">
                    <button>
                        Carrinho
                    </button>
                </a>
            </div>
        </div>
    </main>
</body>

</html>