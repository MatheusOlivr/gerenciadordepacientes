<?php 
    $tituloPage = "Area de Cadastro - total Care";
    $dirIcon = "../images/favicon.ico";
    $dirCss = "../styles/main.css";
    require("header.php");
?>
    <div class = "conteudo-bloco-img">
        <img src = "../images/enfermeira.jpg" alt = "enfermeiros">
    </div>
    <form class = "conteudo-bloco-form" action="../backEnd/functionRegister.php" method = "POST">
        <h1>Cadastre-se</h1>
        <div class="form-area-input">
            <label for = "inputEmail">E-mail:</label>
            <input type = "email" name = "inputEmail" id = "inputEmail" placeholder = "Digite um e-mail">
            <label for = "inputSenha">Senha:</label>
            <input type = "password" name = "inputSenha" id = "inputSenha" placeholder = "Digite uma senha">
            <label for = "inputSenhaConfirm">Confirmar Senha:</label>
            <input type = "password" name = "inputSenhaConfirm" id = "inputSenhaConfirm" placeholder = "DIgite a senha novamente">
            <button>Fazer Cadastro</button>
            <div class = "form-area-footer">
                <a href = "login.php">Já possuo conta</a>
            </div>
        </div>
    </form>
<?php require("footer.php")?>