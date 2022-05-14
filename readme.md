# INDICE:
1. SOBRE O PROJETO:
2. COMO IMPLEMENTAR O PROJETO PARA TESTÁ-LO:
3. MUDANÇAS ENTRE O PROJETO ORIGINAL E O MEU:
4. IMAGENS DO PROJETO:
# 1.SOBRE O PROJETO:
Esse projeto foi criado com o objetivo de eu aperfeiçoar minhas habilidades no desenvolvimento web.
Primeiramente quero agradecer ao [vitor figuereido](https://github.com/vittorfigueiredo/gerenciamento-de-pacientes) por ter disponibilizado esse projeto em seu github.
Usei o que foi desenvolvido por ele como base para meu estudo e fiz uma "reestruturação" do projeto por completo.
Essa é a minha versão do projeto **gerenciador-de-pacientes**
# 2.COMO IMPLEMENTAR O PROJETO PARA TESTÁ-LO:
## Clonando o projeto:
- O primeiro passo para implementar o projeto gerenciador-de-pacientes é abrir o terminal na pasta onde você quer que o projeto seja clonado, colar o seguinte comando:
    git clone https://github.com/MatheusOlivr/gerenciadordepacientes.git  
e dar um enter.
## Iniciando o mysql e criando o banco de dados:
- Após isso você deve iniciar o mysql server, acessar a area do phpmyadmin **(localhost/phpmyadmin)**, abrir a pasta sql, que está dentro da pasta src, puxar o arquivo db.sql e jogar ele dentro da interface do phpmyadmin.
- Outra forma de fazer isso é ir direto na area sql do phpmyadmin e jogar o arquivo la dentro ou abrir o arquivo com um editor de texto, copiar o código, colar ele nessa área e dar um executar.
## Iniciando o servidor para acessar o projeto:
Agora basta iniciar o servidor php dentro do diretório do projeto **(onde se encontra o arquivo index.php)** na porta 8080 e acessar **localhost:8080**
## Fazendo login:
O banco de dados do projeto já vem com um usuario cadastrado e para fazer login desse usuario basta acessar a pagina de login do projeto e colocar:
### LOGIN E SENHA:
    email: admin@admin.com
    senha: admin

# 3.MUDANÇAS ENTRE O PROJETO ORIGINAL E O MEU:
* Os arquivos do front-end do projeto agora ficam em uma pasta chamada front.
(Não sei se esse é o melhor jeito de criar um projeto, mas é a minha versão)
* Para deixar o projeto mais responsivo optei por trocar de pixel para vw e vh na hora de definir tamanhos para os elementos do projeto
* A pagina index agora está mais bonita.
* O footer agora tem um arquivo proprio na pasta frontEnd e ele é chamado usando o require
* O header agora tem um arquivo proprio.

# 4.IMAGENS DO PROJETO:
### Pagina inicial:
![](https://imgur.com/6NCAkXU.png)
### Area de login:
![](https://imgur.com/ux6lmNK.png)
### Area de Cadastro:
![](https://imgur.com/pGgvQV2.png)
### Area de esqueci a minha senha:
![](https://imgur.com/LVftgLo.png)
### Area de listagem dos pacientes:
![](https://imgur.com/8hTTDkz.png)
### Area de cadastro de paciente:
![](https://imgur.com/4xpNdp7.png)

