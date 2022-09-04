# Development CRUD using the Laravel Framework

<p align="center">
    <img alt="CRUD Laravel" title="CRUD Laravel" src="./.github/crud-laravel.gif" width="900px" />
</p>

### Rodando o servidor
sudo docker compose up --build

### Criando projeto Laravel
composer create-project laravel/laravel .

### Rodando o projeto existente
composer update && php artisan key:generate

### Gere as tabelas
php artisan migrate

### Ajustando erros de permissão
chmod -R 777 /var/www/php/