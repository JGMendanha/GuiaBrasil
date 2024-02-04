<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brasil|Resultado Busca</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleBusca.css">
</head>
<body>

    <?php
        include("conexao.php");

        $cidade = $_POST["cidade"] ?? '';

        $busca = "SELECT NOME, DESCRICAO, CIDADE, ESTADO, LONGADOURO, ID_POSTAGEM, EMAIL_CREATOR, PATH_IMAGEM FROM postagem as p WHERE CIDADE LIKE '%$cidade%'";

        $resultado = mysqli_query($conn,$busca);
    ?>

    <a style="text-decoration: none;color:black;" class="botaoVolta" href="index.php">Voltar ao menu principal</a>
    
    <?php
        while ($linha = mysqli_fetch_array($resultado)) {

            $nome = $linha[0];
            $descricao = $linha[1];
            $city = $linha[2];
            $estado = $linha[3];
            $logradouro = $linha[4];
            $id = $linha[5];
            $email = $linha[6];
            $imagem = $linha[7];

            $busca_nome_creator = "SELECT NOME FROM usuario WHERE EMAIL = '$email'";
            $resultado_nome = mysqli_query($conn,$busca_nome_creator);
            $resultado_nome = mysqli_fetch_array($resultado_nome);
            $nome_creator = $resultado_nome[0];

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
                    <span class='info'>$city</span>
                </div>
                <div class='linha'>
                    <span class='label'>Estado:</span>
                    <span class='info'>$estado</span>
                </div>
                <div class='linha'>
                    <span class='label'>Criador:</span>
                    <span class='info'>$nome_creator</span>
                </div>

                <a style='margin-left: 5px;' href='adiciona_postagem_cidade.php?id=$id' class='btn btn-primary btn-sm'>Adicionar a lista de desejos</a>
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