<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guia Brasil|Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleCadastro.css" rel="stylesheet">
  </head>
  <body>
    <header>
        <img class="logo" src="img/logo3Guia.png" alt="Logo do Guia Brasil">
    </header>
    <div class="container">
    <div class="containerCadastro">
            <div class="row">
                <h1 class="h1Cadastro">Cadastro</h1>
                <form action="resultadoCadastro.php" method="POST" class="formCadastro">
                    <div class="form-group">
                        <label for="nome" class="labelFormCadastro">Nome  que deseja ser tratado</label>
                        <input type="text" class="form-control" placeholder = "Digite o nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="labelFormCadastro">Seu melhor E-mail</label>
                        <input type="email" class="form-control" placeholder = "Digite seu E-mail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="labelFormCadastro">Digite uma senha</label>
                        <input type="password" class="form-control" placeholder = "Digite a senha" name="senha" required>
                    </div>
                    <button type="submit" class="botaoCadastro">Cadastrar</button>
                </form>
            </div>    
        </div>
        
        <div class="containerLogin">
            <div class="rowLogin">
                <h1 class="h1Login">Entrar</h1>
                <form action="resultadoLogin.php" method="POST" class="formLogin">
                    <div class="form-group">
                        <label for="email" class="labelFormLogin">Digite seu E-mail</label>
                        <input type="email" class="form-control" placeholder = "Digite seu E-mail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="labelFormLogin">Digite sua senha</label>
                        <input type="password" class="form-control" placeholder = "Digite a senha" name="senha" required>
                    </div>
                    <button type="submit" class="botaoLogin">Entrar</button>
                </form>
            </div>    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>