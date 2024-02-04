<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brasil|Página principal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleindex.css">
</head>
<body>
    <img class="imgMenu" src="img/imgMenu.png" alt="Logo Guia Brasil">
    <?php
        include("conexao.php");
        $nome = get_nome();
        echo "<h1>Olá {$nome}</h1>";
    ?>
    <a style="display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    background-color: #bbf0b0;
    transition: background-color 0.3s, color 0.3s;
    color:black;" href='telaCadastro.php'>Voltar a tela de Login</a>

    <div id="container">
        <div class="postagens">

            <p style="font-size:25px;">Lista de desejos</p>
            <a href="lista_desejo.php">
                <img class="postagemOpcaoDesejo" src="img/imgListaDesejo.png" alt="">
            </a>

            <p style="font-size:25px;">Nova postagem</p>
            <a href="nova_postagem.php">
                <img class="postagemOpcaoPostar" src="img/imgNovaPostagem.png" alt="">
            </a>

            <p style="font-size:25px;">Minhas postagem</p>
            <a href="minhas_postagens.php">
                <img class="postagemOpcaoPostar" src="img/imgMinhasPostagens.png" alt="">
            </a>
        </div>

        <div class="busca">
            <form action="resultado_busca_cidade.php" method="post">
                <div class="form-group">
                    <label style="font-size: 25px;" for="cidade" class="labelFormCadastro">Digite a cidade</label>
                    <input style="font-size: 20px;" type="text" class="form-control" placeholder = "Digite a cidade" name="cidade" required>
                </div>
                <button type="submit" class="botaoBusca">Buscar</button>
            </form>

            <form action="resultado_busca_estado.php" method="post">
                <div class="form-group">
                    <label style="font-size: 25px;" for="estado" class="labelFormCadastro">Selecione o estado</label>
                    <input style="font-size: 20px;" type="text" class="form-control" placeholder = "Digite o estado" name="estado" required>
                </div>
                <button type="submit" class="botaoBusca">Buscar</button>
            </form>

            <form action="resultado_busca_nome.php" method="post">
                <div class="form-group">
                    <label style="font-size: 25px;" for="local" class="labelFormCadastro">Digite o nome do local</label>
                    <input style="font-size: 20px;" type="text" class="form-control" placeholder = "Digite o nome do local" name="local" required>
                </div>
                <button type="submit" class="botaoBusca">Buscar</button>
            </form>
        </div>
    </div>
    
</body>
</html>