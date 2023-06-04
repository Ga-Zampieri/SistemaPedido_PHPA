<?php
session_start()
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrinho</title>
</head>

<body>
    <main>
        <div class="container_carrinho">
            <div class="card_carrinho">
                <h1 class="card_carrinho_title">Carrinho</h1>
                <div class="card_carrinho_options">
                    <?php
                    require_once('connection.php');
                    $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}'";
                    $result = $conn->query($mysql_query);
                    $data = mysqli_fetch_array($result);
                    if ($result && $data != null) {
                        while ($data = mysqli_fetch_array($result)) { ?>

                            <div class="card_carrinho_option">
                                <img class="comidaImage" src="<?=$data['IMAGEM']?>">
                                <p class="descricaoComida"><?=$data['DESCRICAO']?>
                                    <span>Quantidade: <?=$data['QTDE']?></span>
                                    <span>Valor: R$ <?=$data['VALOR']?></span>
                                </p>
                            </div>
                        <?php }
                    } else {
                        echo "Não tem nada no carrinho";
                    }
                    ?>
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
            </div>
        </div>
    </main>
</body>

</html>