# Laravel Zawgyi Unicode

[![Latest Stable Version](https://poser.pugx.org/php-junior/zawuni/v/stable)](https://packagist.org/packages/php-junior/zawuni)
[![Total Downloads](https://poser.pugx.org/php-junior/zawuni/downloads)](https://packagist.org/packages/php-junior/zawuni)

## Installation

Install using composer:
```json
composer require php-junior/zawuni
```

Once installed, in your project's config/app.php file replace the following entry from the providers array:

```php
PhpJunior\Zawuni\ZawuniServiceProvider::class,
```

Add following alias to aliases array in config/app.php
```php
'Zawuni' => PhpJunior\Zawuni\Facades\ZawuniFacades::class
```

And 
```php 
php artisan vendor:publish --provider="PhpJunior\Zawuni\ZawuniServiceProvider"
```
This is the contents of the published config file:

```php
return [
    /*
   |--------------------------------------------------------------------------
   | Available Fonts
   |--------------------------------------------------------------------------
   |
   | "zawgyi", "myanmar3" ,"yunghkio","masterpiece","padauk"
   | "monanonta","ourunicode","imon","mymyanmar","pyidaungsu"
   |
   */

    // default : zawgyi
    'font' => 'zawgyi'
];
```

## Usage

Add `{!! Zawuni::includeFiles() !!}` before `<body>`

```php
Zawuni::text($string);
```

##Credits

Sine Yar Pine Yar .. Thet sine thu arr lone  