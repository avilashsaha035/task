After clone/download this repository you get three .php files and a folder named "todoModule"

## How to run .php files:-
- Open your xampp/wampp server
- Goto any browser and type "localhost/filename" into url box (eg. localhost/task1.php)

## How to run todoModule:-
- Start your XAMPP or WampServer
- Go to phpmyadmin and create a database with this name "laravelVue" and import the .sql file into it. You can find .sql file in this project folder named "laravelVue.sql"
- Open your code editor and open project folder. Then create .env file from .env.example.
- In your cmd prompt run "composer update" and after that run "php artisan key:generate" command.
- Then write the command "php artisan serve" and go to your browser and type "localhost:8000" to run this project..
- For vue.js installation again open a command prompt and run "npm install" and "npm run build"
- Finally after build you should run "npm run watch" to see the changes
