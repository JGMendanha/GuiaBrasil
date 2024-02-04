<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "guiabrasil";
    $nome = null;
    $email = null;

    $conn = mysqli_connect($server, $user, $pass, $bd);


    session_start();

    function set_login($nomeset, $emailset){
        $_SESSION['nome'] = $nomeset;
        $_SESSION['email'] = $emailset;
    }

    function get_email(){
        return isset($_SESSION['email']) ? $_SESSION['email'] : null;
    }

    function get_nome(){
        return isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
    }


?>