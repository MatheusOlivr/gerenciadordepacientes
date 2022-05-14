<link rel = "stylesheet" href = "../styles/mensagem.css">
<?php
    function registerPacient()
    {
        require("connectDb.php");
        $nome = $_POST['inputNome']; 
		$idade = $_POST['inputIdade']; 
		$peso = $_POST['inputPeso'];
        $altura= $_POST['inputAltura'];
		$imc = $peso/(($altura/100)**2);
		$imc = substr($imc,0,5);
        $query = "INSERT INTO pacientes (nome,idade,peso,altura,imc) VALUES ('$nome','$idade','$peso','$altura','$imc')"; 
		mysqli_query($connectDb,$query);
		echo "<h1>".$nome." foi cadastrado com sucesso</h1>";
        echo "<div></div>";
		header('refresh:1;../frontEnd/list.php');
    }
    registerPacient();
?>