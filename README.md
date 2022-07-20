# Superlógica App

## Instalação
Preencher o arquivo `.env` com as credenciais de acesso ao banco de dados (DB_USERNAME e DB_PASSWORD) 

Instalar dependências do PHP:
```php
composer install
```
Criar o banco de dados do projeto:
```
php artisan db:create  
```
Criar a estrutura de tabelas:
```
php artisan migrate  
```
Popular o banco de dados:
```
php artisan db:seed 
```
Gerar a chave da aplicação:
```
php artisan key:generate
```
Instalar das dependências do front-end:
```
npm install
```
Compilar os arquivos estáticos do projeto:
```
npm run dev
```
Iniciar o servidor da aplicação:
```
php artisan serve
```