<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<hr/>

![Role Permission ERD](./git/erd-flow.jpg)

**Set up Laravel project**
```
$ composer create-project laravel/laravel roler

```

**Database setup**
```
DB_CONNECTION=mysql
DB_HOST=mysqlDB
DB_PORT=3306
DB_DATABASE=docker
DB_USERNAME=docker
DB_PASSWORD=docker
```

**Authentication package set up**
```
$ docker-compose exec -it app bash
$ composer require laravel/breeze --dev
$ php artisan breeze:install blade
```

**Database migration, node package install**
```
$ php artisan migrate
$ npm install
$ npm run dev
```

**Install Spatie Package**
```
$ composer require spatie/laravel-permission

In config/app.php, check addition of Permission provider 

'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
];

$ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

$ php artisan migrate

In app/Http/Kernel.php add RoleMiddleware, PermissionMiddleware and RoleOrPermissionMiddleware

```


composer require barryvdh/laravel-debugbar --dev
