<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "shortcut icon" href = "src/images/favicon.ico"/>
    <link rel = "stylesheet" href = "src/styles/main.css"/>
    <title>Pagina inicial</title>
</head>
<body>
    <div id = "conteudo">
        <div class = "conteudo-bloco">
            <div class = "conteudo-bloco-img">
                <img src = "src/images/profissionais.jpg" alt = "enfermeiros">
            </div>
            <div class = "conteudo-bloco-button">
                <h1>Pagina Inicial</h1>
                <a href = "src/frontEnd/login.php"><button>Fazer Login</button></a>
                <a href = "src/frontEnd/cadastrar.php"><button>Cadastrar</button></a>
                <?php require("src/frontEnd/footer.php")?>
            </div>
        </div>
    </div>
</body>
</html>