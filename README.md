# Movie App

This project was created with [Laravel](http://laravel.com/docs) version 5.6.


## Setup laravel movies project

1.  Firstly, setup WAMP, MAMP, LAMP or XAMPP on your machine
3.  Download [composer](https://getcomposer.org/download/) if they are not already downloaded on your machine.
3.  Create the database for the project using phpmyadmin, navicat or any mysql client of your choice.
4.  Rename `.env.example` file to `.env` inside your-project-root and fill the database information (Windows wont let you do it, so you have to open `.env.example` into editor and save as `.env` in same directory).
4.  Open the console / terminal and `cd path-to-your-downloaded-project-root-directory`.
5.  Run `composer install`
6.  Run `php artisan key:generate`
8.  Run `php artisan migrate`
9.  Run `php artisan db:seed` (to run seeders)
10. Run `npm install` to install all the necessary libraries
11. Run `npm run dev` to generate the necessary files for the project to work successfully
12. Finally, run `php artisan serve`. You can now access the project at `localhost:8000`.


## Further help

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
