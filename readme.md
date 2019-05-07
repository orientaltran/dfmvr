
## Install

```bash
$ cp .env.example .env
$ php artisan key:generate
$ composer install
$ npm install
$ php artisan voyager:install --with-dummy
$ php artisan migrate --seed
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
