<link rel = "stylesheet" href = "../styles/main.css">
<?php
    session_start();
    function login()
    {
        require("connectDb.php");
        $email = mysqli_real_escape_string($connectDb,"admin");
        $senha = mysqli_real_escape_string($connectDb,"1111");
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $results = mysqli_query($connectDb,$query);
        $row = 	$row = mysqli_num_rows($results);
        if ($row == 1)
        {
            $_SESSION["logado"] = 1;
            echo "<h1>Logado com sucesso</h1>";
            echo "<div class = 'mensagem'></div>";
            header("refresh:0.5;../frontEnd/list.php");
        }
        else
        {
            $_SESSION['nao_autenticado'] = 1;
            header("location:../frontEnd/login.php");
        } 
    }
    login();

?>