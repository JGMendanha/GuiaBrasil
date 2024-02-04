<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guia Brasil|Cadastro</title>
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

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql_insert = "INSERT INTO `usuario`(`NOME`, `SENHA`, `EMAIL`) 
        VALUES ('$nome','$senha','$email')";
        try{
          $result = mysqli_query($conn, $sql_insert);

          echo"<div class ='sucessoCadastro'>
            <h1>Bem-vindo ao Guia Brasil!</h1>
            <p style='font-size: 30px;'>Agradecemos por se cadastrar. Esperamos que você tenha uma ótima experiência.</p>
          </div>
          
          <a class='botaoLogin' href='index.php'>Ir para página principal</a>";
          set_login($nome, $email);
        }
        catch (mysqli_sql_exception $e){
          echo"<div class ='erroCadastro'>
            <h1>Email já cadastrado!</h1>
            <p style='font-size: 30px;'>Parece que você já se cadastrou anteriormente. Tente acessar sua conta na aba 'Entrar'.</p>
          </div>
          
          <a class='botaoLogin' href='telaCadastro.php'>Voltar a tela de Login</a>";
        }
    ?>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>