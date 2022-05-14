<?php
    require("../backEnd/functionVerificaLogin.php");
    $tituloPage = "Listagem de pacientes";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/list.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-links">
        <a href = "registerPacient.php"><h1>Cadastrar Paciente</h1></a>
    <a href = "../backEnd/functionLogout.php"><h1>Deslogar</h1></a>
    </div>
    <iframe src="../backEnd/functionList.php" frameborder="0"></iframe>
<?php
    require("footer.php");
?>