-----------------------** Overview **-----------------------
The main goal of this project is to calculate the distance between two texts using Hamming distance and Levenshtein distance.

I created two commands ( HammingCommand and LevenshteinCommand ) inside commands in console.
I've used the following:
php artisan make:command HammingCommand
php artisan make:command LevenshteinCommand

for the commands to be executed use the following:
php artisan Distance:Hamming "tar1q" "tareq"
php artisan Distance:Levenshtein "tar1q" "tareq"

I've also built two helpers (Hamming and Levenshtein) it contains the main functions,All of the requests will come through these helpers
the methods and properties inside are private.

I've created a controller (MainController) to access the form page, it's resources and routes.
use the following on the command line to run the app:
php artisan ser
URL: http://127.0.0.1:8000
or
php -S localhost:8000 -t public
URL: http://localhost:8000

form page contains a form that two texts can be filled in, when the form is submitted it will show Hamming distance and 
Levenshtein results between the two texts.

I've creates two unit tests using the following commands:
php artisan make:test HammingTest --unit
php artisan make:test LevenshteinTest --unit

they will be executed using the following:
vendor/bin/phpunit --filter Hamming
vendor/bin/phpunit --filter Levenshtein


-----------------------** Technologies  **-----------------------
1. HTML 5
2. Bootstrap 4.3.1
3. jQuery 3.3.1
4. PHP "^7.3|^8.0"
5. Laravel "^8.65"

-----------------------** How to run the App  **-----------------------
please run 
composer update or composer install and then php artisan ser
