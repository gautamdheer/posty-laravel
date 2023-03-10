## Laravel Project Readme
This Laravel project provides a simple yet powerful user authentication system with features like user registration, login, and logout. Additionally, it offers post liking and disliking functionality to the users.

## Requirements
To run this project, you must have the following installed on your system:

PHP 7.4 or later
Composer
MySQL or any other compatible database

## Installation
Follow the steps below to get started with the project:

Clone the repository to your local machine using git clone.
Navigate to the project directory and install the dependencies by running composer install in the terminal.
Create a copy of .env.example and rename it to .env. Configure it with your database details, including your database name, username, and password.
Generate an application key by running php artisan key:generate.
Run database migrations using php artisan migrate.
Optionally, you can seed the database with test data by running php artisan db:seed.
Start the development server by running php artisan serve.
Usage
After starting the development server, you can access the application in your web browser by visiting http://localhost:8000. You can then create a new account by clicking the Register button and filling in your details. After successfully registering, you can log in with your email and password.

Once logged in, you will be taken to the home page that displays a list of posts. You can like or dislike a post by clicking the corresponding button. The number of likes and dislikes for each post will be displayed.

When you are done, you can log out by clicking the Logout button.

## License
This project is licensed under the MIT License. See the LICENSE file for details.