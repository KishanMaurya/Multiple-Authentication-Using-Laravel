Laravel Multiple Authentication
A simple implementation of multiple authentication in Laravel.

To follow along, this application has been documented as an article on Pusher blog. You can read about it here

Set up
To set up this project, first clone the repositiory

$ git clone https://github.com/KishanMaurya/Multiple-Authentication-Using-Laravel.git
Change your working directory into the project directory

$ cd laravel-multiple-auth
Then install dependencies using Composer

$ composer install
Copy .env.example to .env

$ cp .env.example .env
Create the database file

Run
Run the application with the following command

$ php artisan serve
Remember to visit http://localhost:8000/register/writer and http://localhost:8000/register/admin to register writers and admins respectively. Then visit http://localhost:8000/login/writer and http://localhost:8000/login/admin to login the writers and admins respectively.

Built With
Laravel - The PHP Framework For Web Artisans.
