<link rel = "stylesheet" href = "../styles/mensagem.css">
<?php
    session_start();
    function register()
    {
        require("connectDb.php");
        $email = mysqli_real_escape_string($connectDb,$_POST["inputEmail"]);
        $senha = mysqli_real_escape_string($connectDb,$_POST["inputSenha"]);
        $senhaConfirm = mysqli_real_escape_string($connectDb,$_POST["inputSenhaConfirm"]);
        if ($senha === $senhaConfirm)
        {
            $query = "INSERT INTO usuarios (email,senha) VALUES ('$email','$senha')";
            mysqli_query($connectDb,$query);
            echo "<h1>Usuario inserido com sucesso</h1>";
            echo "<div></div>";
            header("refresh:1;../frontEnd/login.php"); 
        }
        else
        {
            $_SESSION['nao_registrado'] = 1;
            header("location:../frontEnd/register.php");
        } 
    }
    register();

?>