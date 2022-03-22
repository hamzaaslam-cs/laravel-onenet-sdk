# laravel-onenet-sdk

> Note: The Cache in laravel will be used to determine duplicate data. Please try to configue the cache as nosql (redis,etc.)

Onenet for laravel is a laravel library for OneNet platform data reception 

## install

1. Insatll the package 

> Please read the OneNet development documentation before use

```shell
  composer require "hazmaaslam-cs/laravel-onenet-sdk:1.1.0"\
```

## configure

1. manually register 'ServiceProvider'

```php
  Onenet\Laravel\OneNetServiceProvider::class,
```

2. Create a configuratioin file:

```shell
  php artisan vendor:publish --provider="Onenet\Laravel\OneNetServiceProvider"
```

3. (optional) Edit config/onenet.php file or write the following in the .env file

```.env
  OnetNet_Token=Token
  OnetNet_EncodingAESKey=Message encryption and decryption key
  OneNet_APIKey=Key in device operation
  
4. Add the appearance to the 'alaises' in 'confit/app.php' (laravel 5.5+ doesn't need to be added manually)

```php
  'OneNet'=>Onenet\Laravel\Facades\OneNet::class,
```

## Receive platform data from 

## Lraravel csrf issues

1. Exclude api routing in CSRF middleware
2 .Turn off CSRF middleware (not recommended)

The following is an example of receiving push data from the OneNet platform:

> If your domain name app.devis , please log in to the "Third Party Open Platform" of the OneNet platform and modify the "URL (please fill in the server configuration)" as: http://app.dev/onenet.

routing:

```php
Route::any('\onenet','OneNetController@onenet');

> Note: It must be Route::any, because when the OneNet platform is certified, it is when the GETplatform message is pushed.POST



