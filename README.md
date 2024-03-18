## Multi-step From Requirements

1. Clone project to local
2. rename `.env.example` to `.env`
3. Run the command `composer install` or `composer update`
4. Run the command `php artisan key:generate`
5. config database in `.env`
6. Run the command `php artisan migrate`
7. Run the command `php artisan storage:link`
8. Run `php artisan serve`