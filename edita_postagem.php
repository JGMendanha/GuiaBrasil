<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brasil|Editar Postagem</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleCadastroPostagem.css" rel="stylesheet">
</head>
<body>

    <?php
        include("conexao.php");

        $id = $_GET["id"] ?? '';

        $busca = "SELECT NOME, DESCRICAO, CIDADE, ESTADO, LONGADOURO FROM postagem as p WHERE ID_POSTAGEM = $id";

        $resultado = mysqli_query($conn,$busca);

        $linha = mysqli_fetch_array($resultado);
        
    ?>

    <h1>Edição de postagem</h1>
    <form enctype="multipart/form-data" action="edit.php" method="post" class="formCadastro">
        <div class="form-group">
            <label class="labelFormCadastro" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" required value="<?php echo $linha[0];?>">
        </div>
        
        <div class="form-group">
            <label class="labelFormCadastro" for="descricao">Descrição:</label>
            <textarea style="max-height:200px;" class="form-control" name="descricao" rows="4" cols="50" required><?php echo $linha[1];?></textarea>
        </div>

        <div class="form-group">
            <label class="labelFormCadastro" for="cidade">Cidade:</label>
            <input class="form-control" type="text" name="cidade" required value="<?php echo $linha[2];?>">
        </div>

        <div class="form">
            <label class="labelFormCadastro" for="estado">Estado:</label>
            <input style="font-size: 20px;" type="text" class="form-control" placeholder = "Digite o estado" name="estado" required value="<?php echo $linha[3];?>">
        </div>

        <div class="form-group">
            <label class="labelFormCadastro" for="logradouro">Logradouro:</label>
            <input class="form-control" type="text" name="logradouro" required value="<?php echo $linha[4];?>">
        </div>

        <input class="botaoCadastro" type="submit" value="Salvar edição">
        <input type="hidden" name="id" value="<?php echo $id;?>">
    </form>
    <a style="margin-top: 150px;text-decoration: none;color: black;" class='botaoCadastro' href='index.php'>Voltar a tela pricipal</a>"

</body>
</html>