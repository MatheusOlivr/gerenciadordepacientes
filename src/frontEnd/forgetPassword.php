<?php
    session_start();
    $tituloPage = "Esqueci a senha - total Care";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/main.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "../images/enfermeira.jpg" alt = "enfermeiros">
    </div>
    <form class = "conteudo-bloco-form" method = "POST" action = "../backEnd/functionForgetPassword.php" >
        <h1>Esqueci a senha:</h1>
        <?php if ($_SESSION["email_inexistente"])
        {
        ?>
            <p class = "email_inexistente">O e-mail digitado não existe no nosso banco de dados</p>
        <?php
            session_destroy(); 
        }
        ?>
        <div class="form-area-input">
            <label for = "inputEmail">E-mail:</label>
            <input type = "email" name = "inputEmail" required placeholder = "Digite aqui seu  email:" id = "inputEmail">
            <label for = "inputSenha">Senha:</label>
            <input type = "password" name = "inputSenha" required placeholder = "Digite aqui sua nova senha:" id = "inputSenha">
            <button type = "submit">Alterar senha:</button>
        </div>
        <div class = "form-area-footer">
            <a href = "login.php">Login</a>
            <a href = "register.php">Cadastre-se</a>
        </div>
    </form>
<?php require("footer.php")?>