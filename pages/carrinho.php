<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Carrinho</title>
</head>

<body>
    <main>
        <div class="container_carrinho">
            <div class="card_carrinho">
                <h1 class="card_carrinho_title">Carrinho</h1>

                <a href="carrinho.php?ob=nome">
                    <button>
                        Nome
                    </button>
                </a>
                <a href="carrinho.php?ob=qtde">
                    <button>
                        Quantidade
                    </button>
                </a>
                <a href="carrinho.php?ob=val">
                    <button>
                        Valor
                    </button>
                </a>

                <div class="card_carrinho_options">
                    <?php
                    require_once('..\services\connection.php');
                    if (isset($_GET['ob'])) {
                        switch ($_GET['ob']) {
                            case 'nome':
                                $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}' ORDER BY DESCRICAO";
                                break;

                            case 'qtde':
                                $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}' ORDER BY QTDE";
                                break;

                            case 'val':
                                $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}' ORDER BY VALOR";
                                break;

                            default:
                                $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}'";

                                break;
                        }
                    } else {
                        $mysql_query = "SELECT * FROM CARRINHO WHERE COMPRADO = 'N' AND COD_USUARIO = '{$_SESSION['HANDLE']}'";
                    }
                    $result = $conn->query($mysql_query);
                    $data = mysqli_fetch_array($result);
                    if ($result && $data != null) {
                        while ($data = mysqli_fetch_array($result)) { ?>
                            <div class="card_carrinho_option">
                                <img class="comidaImage" src="<?= $data['IMAGEM'] ?>">
                                <p class="descricaoComida">
                                    <?= $data['DESCRICAO'] ?>
                                    <span>Quantidade:
                                        <?= $data['QTDE'] ?>
                                    </span>
                                    <span>Valor: R$
                                        <?= $data['VALOR'] ?>
                                    </span>
                                </p>
                                <a href="..\services\carrinho\delete-carrinho.php?id=<?= $data['HANDLE'] ?>">
                                    <button>
                                        Remover
                                    </button>
                                </a>
                            </div>
                        <?php }
                    } else {
                        echo "Não tem nada no carrinho";
                    }
                    ?>
                </div>
                <div class="carrinho_options">

                    <a href=".\menu.php">
                        <button>
                            Menu
                        </button>
                    </a>
                    <a href=".\cardapio.php">
                        <button>
                            Cardápio
                        </button>
                    </a>
                    <a href="..\services\pedido\add-pedido.php">
                        <button>
                            Finalizar Pedido
                        </button>
                    </a>
                    <a href=".\pedido.php">
                        <button>
                            Meus Pedidos
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>