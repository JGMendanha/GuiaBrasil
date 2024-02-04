<?php
    try {
        include("conexao.php");
        $id = $_GET["id"];

        $sql_busca = "SELECT PATH_IMAGEM FROM postagem WHERE ID_POSTAGEM = $id";
        $path_excluir = mysqli_query($conn, $sql_busca);
        $linha = mysqli_fetch_array($path_excluir);
        $path = $linha[0];

        unlink("C:/xampp/htdocs/GuiaBrasil/" . $path);

        $sql_delete = "DELETE FROM `postagem` WHERE ID_POSTAGEM = $id";
        $result_insert = mysqli_query($conn, $sql_delete);

    } catch (mysqli_sql_exception $e) {
        header("Location: minhas_postagem.php");
        exit();
    }

    header("Location: minhas_postagens.php");
    exit();
?>