<?php
    try {
        include("conexao.php");
        $id = $_GET["id"];

        $sql_delete = "DELETE FROM `lista_desejo` WHERE ID_POSTAGEM = $id";
        $result_insert = mysqli_query($conn, $sql_delete);

    } catch (mysqli_sql_exception $e) {
        header("Location: lista_desejo.php");
        exit();
    }

    header("Location: lista_desejo.php");
    exit();
?>