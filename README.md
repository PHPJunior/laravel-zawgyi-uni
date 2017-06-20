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

And 
```php 
php artisan vendor:publish --provider="PhpJunior\Zawuni\ZawuniServiceProvider"
```
This is the contents of the published config file:

```php
return [
    /*
   |--------------------------------------------------------------------------
   | Font Configuration
   |--------------------------------------------------------------------------
   |
   | Available Fonts: "zawgyi", "myanmar3" ,"yunghkio","masterpiece","padauk"
   |                  "monanonta","ourunicode","imon","mymyanmar","pyidaungsu"
   |
   */

    // default : zawgyi
    'font' => 'ourunicode',

    // define class name in input , textarea
    'define_class' => false
];
```

## Usage

Add `{!! Zawuni::includeFiles() !!}` before `<body>`

```php
Zawuni::text($string);

    ( or )

zawuni($string);
```

## Credits

- [Rabbit Converter](https://github.com/Rabbit-Converter/Rabbit-PHP)
- [Ko Sann Linn Naing](https://github.com/sanlinnaing/php-myanmar-encoding-checker)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.  
