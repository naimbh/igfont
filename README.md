## A Simple Instagram font generator with admin dasboard using Laravel 7.

### Seting up:

1. Clone the repo and cd into it
2. In your terminal ```composer install```
3. Rename or copy ```.env.example``` file to ``.env``
4. php artisan key:generate
5. Set your database credentials in your ```.env``` file
7. Run artisan migrate and seeder to populate the database
10. run command[laravel file manager]:-  ```php artisan storage:link```
11. Edit ```.env``` file :- remove APP_URL
10. ```php artisan serve``` or use virtual host
11. Visit ```localhost:8000``` in your browser
12. Visit /login if you want to access the admin panel. Admin Email/Password: ```admin@gmail.com```/```12345678 or 123456```.
