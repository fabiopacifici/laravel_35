# Steps Laravel

## Installazione

```bash
composer create-project --prefer-dist laravel/laravel:^7.0 dc-comics
```

## npm install

```bash
npm install
```

## connessione database file .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

```

## avvia server locale

```bash
php artisan serve
```

## Creazione Rotte

## Layout iniziale

## Definizione modello e db table

Creare modello

```bash

php artisan make:model Product
```

Creare migrazione

- id
- name
- description
- price
- image
- qty
- created_at
- updated_at

```bash
php artisan make:migration create_products_table
```

Creazione Contoller abbinato al modello | resource

```bash
php artisan make:controller -r -m Product ProductController 
```

Oppure .... Creazione di Model,Migration, Controller in un unico comando

```bash

php artisan make:model -rcm Product
```


## Compilare file migrazione e migrare il db

```bash
php artisan migrate
```
