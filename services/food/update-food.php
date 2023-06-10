<?php
    session_start();  
    if (!isset($_SESSION['NOME']))
        header('Location: http://localhost/SISTEMAPEDIDO_PHPA/login.php');
    else
    {
        if (isset($_POST['novoNomePrato']))
        {
            $__PREFIXIMG__ = "../IMG/";
            $newName = $_POST['novoNomePrato'];
            $newDescription = $_POST['novaDescricaoPrato'];
            $newPrice = $_POST['novoValorPrato'];
            $newImage = $_POST['novaImgPrato'];
            $urlNewImage = "../IMG/".$newImage;
            $handlePrato = $_GET['id'];
            require_once('..\connection.php');
            $mysql_query = "UPDATE CARDAPIO
                                SET 
                                    NOME = '{$newName}',
                                    DESCRICAO = '{$newDescription}',
                                    VALOR = '{$newPrice}',
                                    IMAGEM = '{$urlNewImage}'
                                WHERE HANDLE = '{$handlePrato}'";
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
            mysqli_close($conn);   
            header('Location: http://localhost/SistemaPedido_PHPA/pages/cardapio.php');
        }
    }
?>