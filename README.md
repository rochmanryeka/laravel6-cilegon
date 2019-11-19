# Readme

## System Requirement
- PHP 7.2 =<
- Composer
- Mysql

## Instalasi command
- git clone https://github.com/rochmanryeka/laravel6-cilegon.git
- composer install
- copy .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed --class=blogsSeeder
- php artisan serve

## Note
- .env adalah file credential, isi "DB_DATABASE" dengan nama database misal "belajar_laravel"
- php artisan migarte; untuk migrasi table yg sudah di buat ke database
- php artisan db:seed; untuk insert data dummy blogs (yg sudah di buat di class=blogsSeeder)
