Installation
<br />
Clone the repository
<br />
git clone https://github.com/ShifatNaznin/crud-data-laravel-and-vuejs.git
<br />
Install all the dependencies using composer
<br />
composer install
<br />
Install all the dependencies using npm
<br />
npm install
<br />
Start the local development server
<br />
npm run serve
<br />
Copy the example env file and make the required configuration changes in the .env file
.env.example to .env

Database configuration
DB_DATABASE=your_database_name
DB_USERNAME=your_user_name
DB_PASSWORD=your_password

For Database create
php artisan migrate

Generate a new application key & storage link create
php artisan key:generate
php artisan storage:link

Start the local development server
php artisan serve





