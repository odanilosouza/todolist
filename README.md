# Aplicação de Lista de Tarefas (To-Do List)

Este README fornece instruções passo a passo para configurar e executar a aplicação de lista de tarefas.

## Pré-requisitos

Antes de começar, certifique-se de que você tenha os seguintes softwares instalados:

* **XAMPP ou WAMP:** Para configurar um ambiente de desenvolvimento local com Apache, MySQL e PHP.
* **Navegador Web:** Para acessar a aplicação.

## Configuração do Ambiente

1.  **Instalação do XAMPP/WAMP:**
    * Baixe e instale o XAMPP ou WAMP a partir dos sites oficiais.
    * Após a instalação, inicie os serviços "Apache" e "MySQL" no Painel de Controle do XAMPP/WAMP.

2.  **Criação do Banco de Dados:**
    * Abra o phpMyAdmin no seu navegador (geralmente `http://localhost/phpmyadmin`).
    * Crie um novo banco de dados chamado `todolist`.
    * Execute o seguinte código SQL para criar a tabela `tarefas`:

    ```sql
    CREATE TABLE tarefas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        descricao VARCHAR(255),
        data_limite DATE NOT NULL,
        status VARCHAR(20) DEFAULT 'Pendente'
    );
    ```

## Estrutura de Pastas e Arquivos

1.  **Crie a pasta do projeto:**
    * Dentro do diretório `htdocs` do XAMPP/WAMP, crie uma pasta chamada `todolist`.

2.  **Crie as subpastas:**
    * Dentro da pasta `todolist`, crie as seguintes subpastas:
        * `css`
        * `js`
        * `includes`

3.  **Crie os arquivos PHP:**
    * Dentro da pasta `todolist`, crie os seguintes arquivos:
        * `index.php`
        * `cadastrar.php`
        * `salvar.php`
        * `editar.php`
        * `atualizar.php`
        * `excluir.php`
    * Dentro da pasta `includes`, crie o arquivo `conexao.php`.
    * Dentro da pasta `css`, crie o arquivo `style.css`.
    * Dentro da pasta `js`, crie o arquivo `script.js`

## Configuração dos Arquivos

1.  **Arquivo de Conexão com o Banco de Dados (`includes/conexao.php`):**
    * Abra o arquivo `conexao.php` e adicione o seguinte código, substituindo as credenciais do banco de dados se necessário:

    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todolist";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    ?>
    ```

2.  **Arquivos PHP:**
    * Copie e cole os códigos PHP fornecidos anteriormente nos respectivos arquivos (`index.php`, `cadastrar.php`, `salvar.php`, `editar.php`, `atualizar.php`, `excluir.php`).

3.  **Arquivos CSS e JavaScript:**
    * Copie e cole os códigos CSS e JavaScript fornecidos anteriormente nos respectivos arquivos (`css/style.css` e `js/script.js`).

## Execução da Aplicação

1.  **Abra o navegador:**
    * Abra seu navegador web.

2.  **Acesse a aplicação:**
    * Digite `http://localhost/todolist/index.php` na barra de endereços e pressione Enter.

3.  **Use a aplicação:**
    * Você poderá visualizar a lista de tarefas, adicionar, editar, excluir e filtrar tarefas.

## Testes

* Teste todas as funcionalidades da aplicação para garantir que tudo esteja funcionando corretamente.
* Verifique se as mensagens de feedback são exibidas corretamente.