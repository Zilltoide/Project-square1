
## installation instructions

With the terminal, access the project folder, then execute the following commands :

`php -r "file_exists('.env') || copy('.env.example', '.env');"`

`Composer update`

`Php artisan key :generate`


Create a new database, then modify the db information in the .env file.

```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE= 
DB_USERNAME= 
DB_PASSWORD=
```

Then in the terminal, make the following command to create the tables.

`Php artisan make :migration`

Go to /Project-square1/public

Create a new user with « register ».
now you can add products to your wish list.
