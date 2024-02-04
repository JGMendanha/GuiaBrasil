<?php
    try {
        include("conexao.php");
        $email =  get_email();
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $logradouro = $_POST["logradouro"];

        $imagem = $_FILES["imagem"];
        $pasta = "img_usuario/";
        $nomeImg = $imagem['name'];
        $nomeUnico = uniqid();
        $extensao = strtolower(pathinfo($nomeImg, PATHINFO_EXTENSION));

        echo $imagem;

        move_uploaded_file($imagem['tmp_name'], "C:/xampp/htdocs/GuiaBrasil/" . $pasta . $nomeUnico . "." . $extensao);

        $save_path = $pasta . $nomeUnico . "." . $extensao;

        $sql_insert = "INSERT INTO `postagem`(`EMAIL_CREATOR`, `NOME`, `DESCRICAO`, `CIDADE`, `ESTADO`, `LONGADOURO`, `PATH_IMAGEM`)
        VALUES ('$email','$nome','$descricao', '$cidade', '$estado', '$logradouro', '$save_path')";
        $result_insert = mysqli_query($conn, $sql_insert);

    } catch (mysqli_sql_exception $e) {
        header("Location: cadastrar_postagem.php");
        exit();
    }

    header("Location: index.php");
    exit();
?>
