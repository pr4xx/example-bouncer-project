# Example Laravel 5.6 Project

Related to [JosephSilber/bouncer/issues/306](https://github.com/JosephSilber/bouncer/issues/306)

## How to run

Checkout this project, install composer dependencies, create a mysql database and run:

`php artisan migrate:fresh --seed && vendor\bin\phpunit`

You will see that the second test (`testBouncerFailingWithMultipleTests_2`) fails although it runs the same code as the first one.

If you run each test individually they work just fine.

## What I did

* Created a custom role model with no extra stuff (see `AppServiceProvider@boot`)
* Created a database seeder with one user, role and ability
* Created a test class with two methods, both testing for the abilities of the user
