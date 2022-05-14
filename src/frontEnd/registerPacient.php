<?php
    $tituloPage = "Area de login - total Care";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/main.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "../images/enfermeira.jpg" alt = "enfermeiros">
    </div>
    <form class = "conteudo-bloco-form" method = "POST" action = "../backEnd/functionRegisterPacient.php" >
        <h1>Registrar paciente:</h1>
        <div class="form-area-input">
            <label for = "inputNome">Nome:</label>
            <input type = "text" name = "inputNome" required placeholder = "Digite o nome do paciente" id = "inputNome">
            <label for = "inputIdade">Idade:</label>
            <input type = "number" name = "inputIdade" required placeholder = "Digite aqui a idade do paciente:" id = "inputIdade">
            <label for = "inputPeso">Peso:</label>
            <input type = "number" name = "inputPeso" required placeholder = "Digite aqui o peso do paciente:" id = "inputPeso">
            <label for = "inputAltura">Altura</label>
            <input type = "number" name = "inputAltura" required placeholder = "Digite aqui a altura do paciente:" id = "inputAltura">
            <button type = "submit">Cadastrar Paciente</button>
        </div>
        <div class = "form-area-footer">
            <a href = "list.php">Listar Pacientes</a>
            <a href = "../backEnd/functionLogout.php">Deslogar</a>
        </div>
    </form>
<?php
    require("footer.php");
?>