#Apps Api

clone this project

- composer install

create database name apps
import database use data.sql

change .env <br>
DB_DATABASE=apps <br>
DB_USERNAME=root <br>
DB_PASSWORD=secret <br>

- php artisan storage:link (if use)

uncomment if your want to redirect form http to https (after build tu apps)<br>
Location-> app/Http/Kernel.php<br>
\App\Http\Middleware\HttpsProtocol::class

username = user <br>
password = 123456

I Using Laragon<br>
Laragon is a fast & powerful local development environment.

you can email = suzairi876@gmail.com