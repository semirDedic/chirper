# Laravel chirper


A simple  built with Laravel, Inertia.js and Vue.js. The main objective of this project is to provide an example application for those who are starting with Laravel.

  - Create chirps.
  - Edit chirps.
  - Delete chirps.

### Tech

Technologies used in this project:

* [Laravel](https://github.com/laravel/laravel) - The Laravel PHP framework.
* [Laravel Breeze](https://github.com/laravel/breeze) - Laravel Breeze for auth.
* [Inertia.js](https://github.com/inertiajs/inertia-laravel) - Inertia.js for Laravel.
* [Vue.js](https://github.com/vuejs) - Vue.js.
* [Tailwind CSS](https://tailwindcss.com/) - Tailwind CSS.


### Requirements

* [PHP 8.1+](https://www.php.net/) - PHP version 8.1 or greater.
* [Composer](https://getcomposer.org/download/) - Latest version of composer v2 or greater.
* [npm](https://www.npmjs.com/) - Latest version of npm v10 or greater.


### Installation

1. Clone the `main` branch of this repo

2. Install the dependencies and devDependencies:

```sh
$ cd chirper-demo
$ composer install
$ npm install
$ npm run dev
```

3. Create your .env file and generate the application key:

```sh
$ cp .env.example .env
$ php artisan key:generate
```

4. Run migrations (mysql table name "demo_chirper") and start the server:

```sh
$ php artisan migrate
$ php artisan serve
```

License
----

MIT
