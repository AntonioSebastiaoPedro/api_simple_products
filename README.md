# API Simples com Laravel
Este é um CRUD simples de produtos com API construída com Laravel.

Para rodar o projecto você precisa ter o php instalado na sua máquina. Recomendo usar o <b>XAMPP</b> para este propósito, já que o processo é simples e directo.
Assim que o <b>XAMPP</b> estiver instalado, faça o download do <b>Composer</b> em https://getcomposer.org/.

Em seguida instale o <b>Postman</b> ou qualquer ferramenta de desenvolvimento de API para poder fazer as requisições. Faça o download do Postman pelo link: https://www.getpostman.com/downloads/ ou baixa a sua extensão oferecida pelo Google Chrome.

Crie uma base de dados com o nome "api_simple_products"

Feito isso, faça o git clone ou baixe o código do projecto, abra-o (a raiz do projecto) em um terminal e digite os seguintes comandos:<br>
<code>composer update</code> <br>
<code>php artisan migrate</code> <br>
<code>php artisan serve</code>

Agora poderá abrir o Postman e testar a API. A URI base é localhost:8000/api/products/
