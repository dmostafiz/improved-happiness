## LaraLTE Admin Package powerd by AdminLTE 3 for Laravel 6

Require this package in your composer.json and update composer. This will download the package. or you can just download by 

    composer require mostafiz/laralte

## Installation
After updating composer publish few things.

Publish LaraLTE essential Files

    php artisan vendor:publish --tag=laralte-essentials --force

after publish you will get all essential files (views, contollers, models, migrations, routes, config) in your regular laravel folders.

Then publish LaraLTE assets

    php artisan vendor:publish --tag=laralte-assets --force

it will publish all the asstes (css, js, images) of AdminLTE 3 in your public folder

Now you are good to go.

### License

This LaraLTE Admin package for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
