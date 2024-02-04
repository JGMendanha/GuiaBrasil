<?php
    try {
        include("conexao.php");
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $logradouro = $_POST["logradouro"];

        $sql_insert = "UPDATE `postagem` set `NOME` = '$nome', `DESCRICAO` = '$descricao', `CIDADE` = '$cidade', `ESTADO` = '$estado', `LONGADOURO` = '$logradouro' WHERE ID_POSTAGEM = $id";
        $result_insert = mysqli_query($conn, $sql_insert);

    } catch (mysqli_sql_exception $e) {
        header("Location: edita_postagem.php");
        exit();
    }

    header("Location: minhas_postagens.php");
    exit();
?>