# Prova de PHP para a empresa Miner Tecnologia

### Requisitos
* Criar uma aplicação utilizando Laravel, MySql e quaisquer outras tecnologias que julgar benéficas ao projeto. A aplicação deve prover um sistema de Login e nível de acesso simples.
* O administrador do sistema deverá manter permissões e manter usuários, cada usuário com uma ou mais permissões para a execução das seguintes tarefas.
  
➢ Manter produtos;
➢ Manter categorias;
➢ Manter marcas.

* Não necessita desenvolver os CRUDsreferentes às tarefas acima. Crie apenas uma tela para cada uma das tarefas contendo apenas o título a fim de testarmos se o usuário pode acessa-las ou não.
* O administrador não tem acesso às tarefas relacionadas a manter produtos, categorias e marcas. Apenas os CRUDs de usuário e permissões são necessários.

### Descrição do projeto
* Configurado sistema de login com Jetstream.
* Configurado sistema de permissões com Spatie.
* Usado TailwindCSS.
* Como bônus foi aplicado a criação do usuário administrador através da factory para mostrar meus conhecimentos de seed.
* Foi também adicionado como bônus, um filtro mostrando todos os usuários e suas devidas permissões para o admin ter conhecimento de cada usuário antes de editar.
* Foi criado mensagens personalizadas sucesso nas transações de SQL.
* Como banco de dados, foi usado o serviço na nuvem db4free.
* Realizado as devidas migrations.
* Ao entrar no sistema, cairá direto na página de login. Após o login, cada tipo de usuário deverá ver sua própria view.


### Como usar
Para criar os usuários, basta clicar em criar usuário na página inicial do usuário administrador.<br>
Uma vez logado especificamente como usuário administrador, pode se voltar a pagina inicial clicando no link Dashboard, caso o usuário deseje abordar a edição ou criação de um usuário.<br>
Uma vez logado, pode se retornar à página inicial de login clicando no seu nome na Navbar, onde terá a opção de fazer o Logout.


### Imagens do projeto
![Login](https://github.com/AlessandroGeras/minertecnologia/blob/master/public/Login.jpeg)
![Admin](https://github.com/AlessandroGeras/minertecnologia/blob/master/public/Admin.jpeg)
![Form](https://github.com/AlessandroGeras/minertecnologia/blob/master/public/Form.jpeg)


### Instalação de dependências
```
composer install
npm install
```


### Rodar o servidor
```
php artisan serve
```
