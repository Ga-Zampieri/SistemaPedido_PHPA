<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Cadastro de Prato - Sistema de Pedidos</title>
</head>

<body>
    <main>
        <div class="container_signFood">
            <div class="card_signFood">
                <h1 class="card_signFood_title">Adicionar Prato</h1>
                <form method="post" action="..\services\food\add-food.php" class="card_signFood_form">
                    <div class="form_group">
                        <label for="nomePrato">Nome do Prato</label>
                        <input type="text" name="nome" id="nomePrato" placeholder="Digite o nome do Prato"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="descricaoPrato">Descrição do Prato</label>
                        <input type="text" name="descricao" id="descricaoPrato" placeholder="Digite a descrição do Prato"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group">
                        <label for="nomePrato">Imagem de Divulgação</label>
                        <input type="file" name="imgPrato" id="imgPrato" class="form_group_input imgPrato" required>
                    </div>
                    <div class="form_group">
                        <label for="valorPrato">Valor do Prato</label>
                        <input type="number" name="valorPrato" id="valorPrato" placeholder="Digite o valor"
                            class="form_group_input" required>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_signFood" name="cadastrarPrato">Cadastrar Prato</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>
</html>