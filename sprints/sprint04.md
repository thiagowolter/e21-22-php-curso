# SPRINT 04 - LARAVEL


## 29/08

### Preparação de ambiente

 - Instalação do composer

 - Instalação das bibliotecas Laravel:

 ```
composer create-project laravel/laravel example-app
 ``` 

- Abrir servidor

 ```
php artisan serve
 ```

## 31/08

 - Conceitos Laravel

 ![mvc](/img/mvc.JPG)


### Model

    Sua responsabilidade é gerenciar e controlar a forma como os dados se comportam por meio das funções, lógica e regras de negócios estabelecidas. Banco de Dados.

### View

    Essa camada é responsável por apresentar as informações de forma visual ao usuário.


### Controller

    A camada de controle é responsável por intermediar as requisições enviadas pelo View com as respostas fornecidas pelo Model, processando os dados que o usuário informou e repassando para outras camadas. 