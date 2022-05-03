# Laravel CA3 Game Blog

* Liam Harmon SD2b D00236258
* Sergej Zapivalovs SD2b D00235504
***
## Create Database 
```
mysql
create database laravelblog
exit;
```
## Setup your database credentials in the .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
## Migrate the tables
```
php artisan migrate
```
***
## Home Page 
![alt text](https://github.com/LiamHarmon/LaravelProjectCA3/blob/main/public/images/homepage.png "Laravel Home Page")
