<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Concerts

This project is a simple example for storing concerts with its associated media and groups.

##  Steps to get project running 🛠

1. Create `.env` file: copy or rename `.env.example` located in project root folder. Run `php artisan key:generate` 
to generate a new application key.

2. Install dependencies: to install all app dependencies, run `composer install`.

3. Setup database: create the database on your system and set corresponding connection parameters in the `.env` file.

4. migrate & seed: to generate migrations run command `php artisan migrate`. Then run seeds with `php artisan db:seed`.

## Running project 🚀

To serve the app on to a virtual dev server, run `php artisan serve` and app will start. 
You can find the url address in the response of this command.

## TODOS ⚠
- Testing
- Mail notifications
- Move to npm & Webpack

## Vulnerabilities & contributions

If you discover a security vulnerability, please send an e-mail to Sergio Martín via [sergyzen@gmail.com](mailto:sergyzen@gmail.com). 
All security vulnerabilities will be promptly addressed.

## License

This software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
