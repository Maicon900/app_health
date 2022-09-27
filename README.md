## App_health 1.0


## Requisitos:

```
- PHP:^8.1.10
- Laravel Installer:^4.2.17
- Composer:^2.4.2
- Node:v16.14.2
```
## Comandos:

```
* Baixar as dependências {
    - npm i
    - composer install
}
* Subir o servidor local {
    - npm run dev #Deixar comando rodando no terminal
    - php artisan serve #Deixar comando rodando no terminal
}
* Modelar Banco de dados {
    - php artisan migrate
}
```

## Arquivo `.env`:

```
Inserir configurações:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=app_health
DB_USERNAME={$USERNAME}
DB_PASSWORD={$PASSWORD}
``` 


