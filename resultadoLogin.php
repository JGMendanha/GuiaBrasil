<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guia Brasil|Entrar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleCadastro.css" rel="stylesheet">

    <style>
      a{
        text-decoration: none;
        color: green;
        border: 1px solid green;
      }
      a:hover{
        text-decoration: none;
      }
    </style>
    
  </head>
  <body>
    <?php
        include ("conexao.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql_login = "SELECT * FROM usuario WHERE EMAIL = '$email' AND SENHA = '$senha'";
        $resultado = mysqli_query($conn, $sql_login);

          if (mysqli_num_rows($resultado) > 0) {
            $linha = mysqli_fetch_array($resultado);
            set_login($linha[0], $email);
            echo"<div class ='sucessoCadastro'>
              <h1>Bem-vindo ao Guia Brasil!</h1>
              <p style='font-size: 30px;'>Bem vindo de volta. Aproveite ao máximo nosso Guia Brasil</p>
            </div>
            
            <a class='botaoLogin' href='index.php'>Ir para página principal</a>";
          }
          else {
            echo"<div class ='erroCadastro'>
              <h1>Erro ao entrar!</h1>
              <p style='font-size: 30px;'>Acho que você errou suas informações ou ainda não fez seu cadastro. Por favor, tente novamente.</p>
            </div>
            
            <a class='botaoLogin' href='telaCadastro.php'>Voltar a tela de Login</a>";
          }
    ?>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>