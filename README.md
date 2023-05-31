# Scholarship portal

## Requirements
* PHP 8.1 and above
* Recommended IDE - VScode or PHPStorm

## Setup
* Migrate the database
```shell
php artisan migrate
```
* Seed data
```shell
php artisan db:seed
```
* Create a link to storage directory
```Shell
php artisan storage:link
```

## Usage
* For development or testing purposes, you can use the laravel built in server by running 
```shell
php artisan serve
```

## Note
* Default admin login
- Email: admin@site.com
- Password: 123456
