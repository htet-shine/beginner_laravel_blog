# Simple Laravel Blog

This is my first laravel project/application. I am learning to develop applications with a proper php framework and getting used to the idea of Model, View, Controller (MVC).

Updated to Laravel 6.

#### Features
* Creating User Accounts
* Adding Categories for Blog Posts
* Adding/ Editing & Deleting Blog Posts by Users
* Making Comments on Blog Posts by Users

If you want to know more about this project [Click Here](https://htetshineaung.com) to check it out at my website.

With all of that out of the way lets begin installation.

---

#### Installation Instructions

Note that the instructions are written with the mindset that this application would be run on a local server.

##### All Prerequisites

1. Download [xampp](https://www.apachefriends.org/download.html) (or similar alternatives)
1. Download [composer](https://getcomposer.org/download/)
1. Download [winrar](https://www.win-rar.com/start.html?&L=0)
1. Download [project files](https://github.com/htet-shine/beginner_laravel_blog/archive/master.zip)

After downloading

* Install **xampp, composer and winrar** (all of these are just to make sure you have everything you need to setup this application. Chances are you already have these installed)
* Launch xampp and start **Apache** and **MySQL** services
<br><br>
* Open a web browser and type in `localhost/phpmyadmin`
* Create a new database [ name of your chice ] and `utf8mb4_unicode_ci` collation
* Extract __the project zip file__ and you will get **a folder** that contains all the folders and files from this repository
* Place that folder in `C:\xampp\htdocs` (Default xampp install location)
* Open the folder and rename `.env.example` to `.env`
* Open `.env` file in notepad or your favorite text editor and change the following lines
```
DB_DATABASE=     (your database name)
DB_USERNAME=root (or your username if you have one)
DB_PASSWORD=     (type in password if you have set it else leave it blank)
```
* Open command prompt (or similar command line interface) and cd into the root folder of the project
```bash
cd *folder path*
```

1. Run `composer install` to install framework dependencies
1. Run `php artisan key:generate` to create application encryption key
1. Run `php artisan migrate` to create tables in your database
1. Run `php artisan db:seed` to insert pre-made data into your tables
1. Open your browser and type in `localhost/your_root_folder_name` and click on `public` folder

If you see the home page of the application, you've successfully installed the application. Test it and enjoy.

---

If you have any questions [Send me an Email](mailto:htetshineaung.dev@gmail.com)

Thank you for checking out my repository. Have a good day.



