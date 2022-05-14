<link rel = "stylesheet" href = "../styles/mensagem.css">
<?php 
    session_start();
    session_destroy();
	echo "<h1>Deslogado com sucesso</h1>";
    echo "<div></div>";
    header("refresh:1;../../index.php");
?>