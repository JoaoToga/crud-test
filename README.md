## PROJETO DE TESTE PARA A EMPRESA VANGUARDA MARTECH
## DESENVOLVEDOR WEB PLENO

* Composer
* PHP 8.2 +

## O PROJETO ESTA COM O CREAT (CADASTRO) E UPDATE (EDITAR) FEITO EM LARAVEL

## COMANDOS PARA EXECUTAR NO TERMINAL

Criar Projeto Laravel OBS: ' . ' no final da query esta sendo dado o comando pra criar ma raiz da pasta*

    composer create-project laravel/laravel .
--

Criar Controller

    php artisan make:controller UserController
--

Inciar projeto (start para abrir no navegador)

    php artisan serve
--

Iniciar o projeto no navegador

    http://127.0.0.1:8000
--

Executa Migration (cria o DjB no Mysql)

    php artisan migrate
--

Criar Arquivo Request para validação do formulario
    php artisan make:request UserRequest
    
<br/><br/>

Funcionamento do Sistema.

1 Tela Inicial </br>
    Ja Deixei Clientes inse5ridos na base de dados <br/><br/>
    
![image](https://github.com/user-attachments/assets/c2c8c55e-7aef-48eb-8076-a5d21ebb112e) <br/><br/>

2 Tela de Cadastro <br/>
    Tem 3 campos obrigatorio: Nome, Email e Senha <br/>
    Implementado com algumas regras de negocios fundamentais como: Campos Vazios, Validaçao de email, email como unique no BD, senha com no minimo 3 caracteres <br/><br/>
    
![image](https://github.com/user-attachments/assets/6b4ba7ac-8dd4-48c3-9430-028bdf1e227b)<br/><br/>

3 Tela de Edição<br/>
    Tem o mesmo layout da tela de cadastro.<br/>
    Ao clicar em Enviar, os dados sao alterados no banco de dados<br/>
    O sistema redireciona para a listagem.<br/><br/>

![image](https://github.com/user-attachments/assets/3c36e648-b942-4d2f-95a6-6f6eb1cff559)<br/><br/>

4 Tela de Visualização<br/>
    Nessa tela mostro todos os dados do cliente<br/>
    Adicionando campos como a data que foi cadastrado e editado<br/><br/>
![image](https://github.com/user-attachments/assets/b1a83a91-2562-4222-a085-616d4ff13a8d)<br/><br/>

5 Tela de Exclusao
    Na tela principal tem o botao Apagar<br/>
    Ao ser acionado o sistema manda uma notificação, sobre a certeza da ação<br/>
    Dependendo da escolha o cliente é excluido ou nao da base de dados]<br/><br/>
![image](https://github.com/user-attachments/assets/6a7ec1c4-007a-4e08-a03e-7ac4326f0357)

Utilizei de boas preaticas de programação, comentando parte fundamentais do codigo e mantendo o algoritmo limpo e escalavel, facilitando o entedimento e refatoraçao independente do desenvolvedor.
Abaixo dois blocos de codigo, para demonstrar:<br/>
Abaixo as rotas<br/>
![image](https://github.com/user-attachments/assets/702f6d0a-e70d-4cf2-8e16-05cba7b99144)<br/><br/>
Metodos de ediçao e exclusão dos dados.<br/><br/>
![image](https://github.com/user-attachments/assets/3ba909a3-4e1d-43a5-9421-664c59e59746)




