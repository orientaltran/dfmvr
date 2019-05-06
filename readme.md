
## Install

```bash
$ cp .env.example .env
$ php artisan key:generate
$ composer install
$ npm install
$ php artisan migrate --seed
$ chmod -R 777 storage/logs storage/framework/ storage/debugbar
$ chmod -R 775 storage/app

$ php artisan voyager:install --with-dummy
```

- User: admin@admin.com
- Password: password

## Create Model, Repository

```bash
$ php artisan make:repository [Model_Name] --skip-migration
```

## Create migration form exist database

```bash
php artisan migrate:generate [table_list]
```

## Create layout
