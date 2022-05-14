<?php
    $tituloPage = "Area de login - total Care";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/list.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-links">
        <a href = "registerPacient.php"><h1>Cadastrar Paciente</h1></a>
    <a href = "logout.php"><h1>Deslogar</h1></a>
    </div>
    <iframe src="../backEnd/functionList.php" frameborder="0"></iframe>
<?php
    require("footer.php");
?>