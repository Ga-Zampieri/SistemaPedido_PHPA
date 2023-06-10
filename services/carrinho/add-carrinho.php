<?php 
    session_start();  
    if (!isset($_SESSION['NOME']))
        header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
    else
    {
        require_once('..\connection.php');
        if (isset($_GET['id'])) 
        {
            $handle = $_GET['id'];
            
            $query_produto = "SELECT * FROM CARDAPIO WHERE HANDLE = '{$handle}'";
            $resProduto = $conn->query($query_produto);
            $produto = mysqli_fetch_array($resProduto);
            if($resProduto && $produto != null)
            {
                $valor = $produto['VALOR'];
                $qtde = 1;
                $descricao = $produto['NOME'];
                $imagem = $produto['IMAGEM'];
                $urlNewImage = "../IMG/".$imagem;
            }

            $mysql_query = "INSERT INTO CARRINHO (COD_USUARIO, COD_ITEM, QTDE, VALOR, DESCRICAO, IMAGEM) VALUES ('{$_SESSION['HANDLE']}', '{$handle}', '{$qtde}', '{$valor}', '{$descricao}', '{$urlNewImage}')";
            $result = $conn->query($mysql_query);
            if ($result)
            {
                $msg = "insert-sucess";
                $msgerror = "";
            }
            else {
                $msg = "insert-error";
                $msgerror = $conn->error;
            }
        }
        mysqli_close($conn);
        header('Location: http://localhost/SistemaPedido_PHPA/pages/cardapio.php');
    }

?>