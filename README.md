## Setup Environemt Variables
    Copy .env.example to .env and setup environment variables
    
    This includes api_key and mysql settings
## Run application
    php -S localhost:8080 -t public/

## Composer Setup
    composer install

## Run Migrations
    Run the shell script under /migrations

## Seed Database with data from API
    Run the shell script under /seeders

## TODO
    Implement Front End with Pagination (and filtering)

    Perhaps Vue.js with PrimeVue with LazyLoading

    Write some tests