<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <title>Avaliação - Sistema de Pedidos</title>
</head>

<body>
    <button type="button" class="backButton">
        <a href=".\menu.php"><img src="../img/arrow.png" alt="Back Button" /></a>
    </button>
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
        <div class="container_feedback">
            <div class="card_feedback">
                <h1 class="card_feedback_title">Faça uma avaliação</h1>
                <form method="post" class="card_feedback_form">
                    <div class="form_group avaliacao">
                        <p class="description_nota">Nota de Avaliação:</p>
                        <div class="nota">
                            <label for="um">1</label>
                            <input type="radio" id="um" name="nota_avaliacao" value="1">
                        </div>
                        <div class="nota">
                            <label for="dois">2</label>
                            <input type="radio" id="dois" name="nota_avaliacao" value="2">
                        </div>
                        <div class="nota">
                            <label for="tres">3</label>
                            <input type="radio" id="tres" name="nota_avaliacao" value="3">
                        </div>
                        <div class="nota">
                            <label for="quatro">4</label>
                            <input type="radio" id="quatro" name="nota_avaliacao" value="4">
                        </div>
                        <div class="nota">
                            <label for="cinco">5</label>
                            <input type="radio" id="cinco" name="nota_avaliacao" value="5">
                        </div>
                    </div>
                    <div class="form_group comentario">
                        <label for="comentario">Comentário</label>
                        <textarea name="textarea" rows="5" cols="30">Escreva um comentário.</textarea>
                    </div>
                    <div class="form_group entrar">
                        <button type="submit" class="btn_sign" name="avaliar">Avaliar</button>
                    </div>
                </form>
                <div class="avaliacoes_feitas">
                    <div class="avaliacoes_feitas_item">
                        <img src="../img/person.png" alt="Avatar Pessoa" class="user_img">
                        <p class="user_name">Fulano</p>
                        <p class="user_nota">Nota: <span class="user_nota_numero">5</span></p>
                        <p class="user_comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                            praesentium pariatur laborum consequatur necessitatibus aperiam iure et atque non suscipit,
                            quod reprehenderit voluptate, vitae error repellendus amet aliquam? Sint, perferendis.</p>
                    </div>
                    <div class="avaliacoes_feitas_item">
                        <img src="../img/person.png" alt="Avatar Pessoa" class="user_img">
                        <p class="user_name">Fulano</p>
                        <p class="user_nota">Nota: <span class="user_nota_numero">5</span></p>
                        <p class="user_comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                            praesentium pariatur laborum consequatur necessitatibus aperiam iure et atque non suscipit,
                            quod reprehenderit voluptate, vitae error repellendus amet aliquam? Sint, perferendis.</p>
                    </div>
                    <div class="avaliacoes_feitas_item">
                        <img src="../img/person.png" alt="Avatar Pessoa" class="user_img">
                        <p class="user_name">Fulano</p>
                        <p class="user_nota">Nota: <span class="user_nota_numero">5</span></p>
                        <p class="user_comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                            praesentium pariatur laborum consequatur necessitatibus aperiam iure et atque non suscipit,
                            quod reprehenderit voluptate, vitae error repellendus amet aliquam? Sint, perferendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>