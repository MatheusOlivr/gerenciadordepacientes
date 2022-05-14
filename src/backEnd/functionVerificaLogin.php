<?php 
    session_start();
    function verificaLogin()
    {
        if(!$_SESSION["logado"])
        {
            header("location:../frontEnd/login.php");
            exit();
        }
    }
    verificaLogin();
?>