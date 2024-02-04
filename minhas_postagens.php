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

        $busca = "SELECT NOME, DESCRICAO, CIDADE, ESTADO, LONGADOURO, ID_POSTAGEM FROM postagem as p WHERE EMAIL_CREATOR LIKE '$email'";

        $resultado = mysqli_query($conn,$busca);
    ?>

    <a style="text-decoration: none;color:black;" class="botaoVolta" href="index.php">Voltar ao menu principal</a>
    
    <?php
        while ($linha = mysqli_fetch_array($resultado)) {

            $nome = $linha[0];
            $descricao = $linha[1];
            $cidade = $linha[2];
            $estado = $linha[3];
            $logradouro = $linha[4];
            $id = $linha[5];

            echo "<div class='card'>
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

            <div class='linha'>
                <span class='label'>Logradouro:</span>
                <span class='info'>$logradouro</span>
            </div>

            <a href='edita_postagem.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
            <a href='exclui_postagem.php?id=$id' class='btn btn-danger btn-sm'>Excluir</a>
        </div>";
        }
    ?>
    
</body>
</html>