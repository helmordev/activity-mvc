# Activity-MVC

This is a Laravel project created with `laravel new Activity-MVC`.

## Project Setup

1.  Clone the repository.
2.  Run `composer install` to install the dependencies.
3.  Run `npm install`.
4.  Copy `.env.example` to `.env` and configure your database.
5.  Run `php artisan key:generate`.
6.  Run `php artisan migrate`.

## Running the project

To run the project, you can use the `dev` script from `composer.json`:

```bash
composer run dev
```

This command will start the development server, the queue listener, and the Vite development server for Tailwind CSS.