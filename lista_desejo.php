<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brasil|Minhas postagens</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleBusca.css">
</head>
<body>

    <?php
        include("conexao.php");

        $email = get_email();

        $busca = "SELECT ID_POSTAGEM FROM lista_desejo WHERE EMAIL_CREATOR LIKE '$email'";

        $resultado = mysqli_query($conn,$busca);
    ?>

    <a style="text-decoration: none;color:black;" class="botaoVolta" href="index.php">Voltar ao menu principal</a>
    
    <?php
        while ($id_post = mysqli_fetch_array($resultado)) {
            $busca_post = "SELECT NOME, DESCRICAO, CIDADE, ESTADO, LONGADOURO, ID_POSTAGEM, EMAIL_CREATOR, PATH_IMAGEM FROM postagem as p WHERE ID_POSTAGEM = $id_post[0]";
            $resultado_post = mysqli_query($conn,$busca_post);
            $linha = mysqli_fetch_array($resultado_post);
            $nome = $linha[0];
            $descricao = $linha[1];
            $cidade = $linha[2];
            $estado = $linha[3];
            $logradouro = $linha[4];
            $id = $linha[5];
            $imagem = $linha[7];

            echo "<div class='cardBusca'>
            <div class='desc'>
                <div class='linha'>
                    <span class='label'>Nome:</span>
                    <span class='info'>$nome</span>
                </div>
                <div class='linha'>
                    <span class='label'>Descrição:</span>
                    <span class='info descricao'>$descricao</span>
                </div>
                <div class='linha'>
                    <span class='label'>Cidade:</span>
                    <span class='info'>$cidade</span>
                </div>
                <div class='linha'>
                    <span class='label'>Estado:</span>
                    <span class='info'>$estado</span>
                </div>

                <a href='exclui_postagem_desejo.php?id=$id' class='btn btn-danger btn-sm'>Excluir</a>
            </div>

            <div class='img_post'>
                <span style='margin-top:20px' class='label'>Imagem:</span>
                <img style='width:280px' src='$imagem' alt='Descrição da imagem'>
            </div>

        </div>";
        }
    ?>
    
</body>
</html>