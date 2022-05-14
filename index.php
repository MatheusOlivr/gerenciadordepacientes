<?php 
    $tituloPage = "Pagina Inicial";
    $dirIcon = "src/images/favicon.ico";
    $dirCss = "src/styles/main.css";
    require("src/frontEnd/header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "src/images/profissionais.jpg" alt = "enfermeiros">
    </div>
    <div class = "conteudo-bloco-button">
        <h1>Pagina Inicial</h1>
        <a href = "src/frontEnd/login.php"><button>Fazer Login</button></a>
        <a href = "src/frontEnd/register.php"><button>Cadastrar</button></a>
    </div>
<?php require("src/frontEnd/footer.php")?>