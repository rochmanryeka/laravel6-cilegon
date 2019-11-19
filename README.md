## Readme

## System Requirement
- PHP 7.2 =<
- Composer

## Instalasi command
- git clone https://github.com/rochmanryeka/laravel6-cilegon.git
- composer install
(*Windows, gunakan "cp" untuk linux)
- copy .env.example .env
- php artisan key:generate
(buat database baru, setelah itu buka .env, ganti "DB_DATABASE" dengan nama database yg dibuat; misal "belajar_laravel")
- php artisan migrate
(seed data dummy untuk blogs)
- php artisan db:seed --class=blogsSeeder