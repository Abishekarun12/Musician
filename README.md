## For Basic Functionalities
## How to run the code
- git clone https://github.com/Abishekarun12/FarmEasy.git
- cp .env example as .env
cd musician
composer install/ composer update
Create a DB as your wish(name)
Run php artisan migrate:fresh --seed
Here I'm Declaring the "writer" role as "musician".
The "admin" can only create a new "musician" role.
User can saw the audio files directly from the welcome page.
Run "php artisan storage:link".
Finally, Run "php artisan serve"
- Best of luck 


## Credentials
- #### Admin
- email: admin@admin.com
- password : password
- #### Writer
- email: writer@writer.com
- password: password
