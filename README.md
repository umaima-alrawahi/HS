## About MVP

the project collect services from many type in one site, in which user could find needed service and companies could offer their services 

Getting Started
Dependencies
This is a standard Laravel project. All dependencies are listed in composer.json.

Installing
The standard way of installing a Laravel application suffices

Clone the repository

git clone https://github.com/umaima-alrawahi/HS
Go into the app directory & install composer dependencies

composer install
Copy .env.example to .env and make sure to set the application name, application url and database parameters.

Set the application key

php artisan key:generate
Migrate so the tables are created

php artisan migrate
If wanted, you can seed the app with some test data

php artisan db:seed
Install npm dependencies and compile assets

npm install && npm run dev
