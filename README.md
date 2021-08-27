# Overview 
This is a bckend for portfolio project "Tenders Tracker". It is written in PHP(Laravel). 

Frontend can be found at `https://github.com/ernestasga/tenders-tracker-frontend` and it expects a backend at port **8000**

# Installation
* Clone this repo
* Run `composer install`
* Rename `.env.example` to `.env`
* Run `php artisan key:generate`

*By default this project is using local SQLITE database located at `database/database.sqlite`, feel free to change it by modifying `.env` file*

* Run `php artisan migrate`
* ***Optional*** Run `php artisan db:seed`
* Run `php artisan serve --port=8000`
