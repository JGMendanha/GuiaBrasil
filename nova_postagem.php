<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brasil|Nova Postagem</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleCadastroPostagem.css" rel="stylesheet">
</head>
<body>
    <h1 style='margin-bottom: 30px;'>Cadastro de postagem</h1>
    <form enctype="multipart/form-data" action="cadastrar_postagem.php" method="post" class="formCadastro">
        <div class="form-group">
            <label class="labelFormCadastro" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" required>
        </div>
        
        <div class="form-group">
            <label class="labelFormCadastro" for="descricao">Descrição:</label>
            <textarea style="max-height:100px;" class="form-control" name="descricao" rows="4" cols="50" required></textarea>
        </div>

        <div class="form-group">
            <label class="labelFormCadastro" for="cidade">Cidade:</label>
            <input class="form-control" type="text" name="cidade" required>
        </div>

        <div class="form">
            <label class="labelFormCadastro" for="estado">Estado:</label>
            <input style="font-size: 20px;" type="text" class="form-control" placeholder = "Digite o estado" name="estado" required>
        </div>

        <div class="form-group">
            <label class="labelFormCadastro" for="logradouro">Logradouro:</label>
            <input class="form-control" type="text" name="logradouro" required>
        </div>

        <div class="form-group">
            <label class="labelFormCadastro" for="imagem">Imagem do local:</label>
            <input class="form-control" type="file" name="imagem" required>
        </div>

        <input class="botaoCadastro" type="submit" value="Cadastrar">
    </form>
    <a style="margin-top: 200px;text-decoration: none;color: black;" class='botaoCadastro' href='index.php'>Voltar a tela pricipal</a>
</body>
</html>