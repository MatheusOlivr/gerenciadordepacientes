<?php
    session_start();
    $tituloPage = "Cadastrar";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/main.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "../images/profissionais.jpg" alt = "enfermeiros">
    </div>
    <form class = "conteudo-bloco-form" method = "POST" action = "../backEnd/functionRegister.php" >
        <h1>Cadastre-se:</h1>
        <?php if ($_SESSION["nao_registrado"])
        {
        ?>
            <p class = "nao-registrado">As senhas não batem</p>
        <?php
            session_destroy(); 
        }
        ?>
        <div class="form-area-input">
            <label for = "inputEmail">E-mail:</label>
            <input type = "email" name = "inputEmail" required placeholder = "Digite aqui um  email:" id = "inputEmail">
            <label for = "inputSenha">Senha:</label>
            <input type = "password" name = "inputSenha" required placeholder = "Digite aqui uma  senha:" id = "inputSenha">
            <label for = "inputSenhaConfirm">Confirmação de senha:</label>
            <input type = "password" name = "inputSenhaConfirm" required placeholder = "Digite aqui a senha novamente:" id = "inputSenhaConfirm">
            <button type = "submit">Cadastre-se:</button>
        </div>
        <div class = "form-area-footer">
            <a href = "forgetPassword.php">Esqueceu a senha</a>
            <a href = "login.php">Fazer Login</a>
        </div>
    </form>
<?php require("footer.php")?>