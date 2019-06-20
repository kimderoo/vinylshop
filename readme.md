## Vinylshop instructions

Clone the "Vinylshop" repository to your local folder 

```git clone https://github.com/kimderoo/vinylshop "name_of_choice"```


Create a new database in PhpMyadmin



Find the "env.example" file and save as "env"
Fill in the following env fields with your custom database and Braintree keys:

```
DB_DATABASE=*database_naam*
DB_USERNAME=*database_gebruikersnaam*
DB_PASSWORD=*database_wachtwoord

BT_ENVIRONMENT=
BT_MERCHANT_ID=
BT_PUBLIC_KEY=
BT_PRIVATE_KEY=
```


Install dependencies with composer

```composer install```


Migrate and seed the database

```php artisan migrate --seed```


Generate keys

```php artisan key:generate```





## Suffix
Contact kimderoo2@gmail.com in case of questions, and enjoy this project!