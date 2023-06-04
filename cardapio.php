<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cardápio</title>
</head>
<body>
    <main>
        <div class="container_cardapio">
            <div class="card_cardapio">
                <h1 class="card_cardapio_title">Cardápio</h1>
                <div class="card_cardapio_options">
                    <?php 
                    require_once('connection.php');
                    $mysql_query = "SELECT * FROM CARDAPIO WHERE ATIVO = 'S'";
                    $result = $conn -> query($mysql_query);
                    if ($result) //executou
                    { 
                        while ($data = mysqli_fetch_array($result)) { ?>
                    
                            <div class="card_cardapio_option">
                                <img class="comidaImage" src="<?=$data['IMAGEM']?>">
                                <p class="descricaoComida"><?=$data['NOME']?>
                                    <span>Valor: R$ <?=$data['VALOR']?></span>
                                </p>
                                <a href=".\services\carrinho\add-carrinho.php?id=<?=$data['HANDLE']?>">
                                    <button>
                                        Adicionar ao Carrinho
                                    </button>
                                </a>
                            </div> 
                    <?php } 
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>