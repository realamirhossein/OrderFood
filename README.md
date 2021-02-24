## Installation

1. clone the repo and cd into it
1. `composer install`
1. rename or copy `.env.example` file to `.env`
1. Enter your database credentials in your `.env` file
1. Change `BROADCAST_DRIVER` to `pusher` in your `.env` file
1. Enter your Pusher credentials in your `.env` file. If needed, change cluster in `config/broadcasting.php`
1. `php artisan migrate`
1. `php artisan db:seed`
1. `php artisan key:generate`
1. Enter your Pusher key in `resources/assets/js/bootstrap.js`. If needed, change cluster as well
1. `npm install`
1. `npm run dev`
1. `php artisan serve` 
1. you can login with defined users in UserTableSeeder
