<?php 
    $tituloPage = "Area de login - total Care";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/main.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "../images/enfermeira.jpg" alt = "enfermeiros">
    </div>
    <form class = "conteudo-bloco-form" method = "POST" action = "../backEnd/functionLogin.php" >
        <h1>Fazer Login:</h1>
        <div class="form-area-input">
            <label for = "input-email">E-mail:</label>
            <input type = "email" name = "input-email" required placeholder = "Digite aqui seu  email:" id = "input-email">
            <label for = "input-senha">Senha:</label>
            <input type = "password" name = "input-senha" required placeholder = "Digite aqui seu  senha:" id = "input-senha">
            <button type = "submit">Fazer Login:</button>
        </div>
        <div class = "form-area-footer">
            <a href = "forgetpassword.php">Esqueceu a senha</a>
            <a href = "register.php">Cadastre-se</a>
        </div>
    </form>
<?php require("footer.php")?>