<link rel = "stylesheet" href = "../styles/mensagem.css">
<?php
    session_start();
    function forgetPassword()
    {
        require("connectDb.php");
        $email = mysqli_real_escape_string($connectDb,$_POST["inputEmail"]);
        $senha = mysqli_real_escape_string($connectDb,$_POST["inputSenha"]);
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $results = mysqli_query($connectDb,$query);
        $row = 	$row = mysqli_num_rows($results);
        if ($row == 1)
        {
            $query = "UPDATE usuarios SET senha = '$senha' WHERE email ='$email'";
            mysqli_query($connectDb,$query);
            echo "<h1>Senha alterada com sucesso</h1>";
            echo "<div></div>";
            header("refresh:1;../frontEnd/login.php");
        }
        else
        {
            $_SESSION['email_inexistente'] = 1;
            header("location:../frontEnd/forgetPassword.php");
        } 
    }
    forgetPassword();

?>