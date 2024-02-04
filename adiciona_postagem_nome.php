<?php
    try {
        include("conexao.php");
        $id = $_GET["id"];
        $email = get_email();

        $sql_delete = "INSERT INTO `lista_desejo` (`EMAIL_CREATOR`, `ID_POSTAGEM`) VALUES ('$email','$id')";
        $result_insert = mysqli_query($conn, $sql_delete);

    } catch (mysqli_sql_exception $e) {
        header("Location: index.php");
        exit();
    }

    header("Location: index.php");
    exit();
?>