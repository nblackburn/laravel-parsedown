# Laravel Parsedown

A Parsedown wrapper for Laravel &amp; Lumen.

## Installation

### Laravel

Inside `config/app.php` add the following line in your providers

```php
LaravelParsedown\Providers\LaravelServiceProvider::class
```

and then simply run the following artisan command...

```bash
php artisan config:publish nblackburn/laravel-parsedown
```

#### Facade

To add facade support for Laravel, add the following line inside your `config/app.php` under the alias section...

```php
'Parsedown' => LaravelParsedown\Facades\Parsedown::class,
```

### Lumen

Inside `bootstrap/app.php`, add the following line:

```php
$app->register(LaravelParsedown\Providers\LumenServiceProvider::class);
```
then add the following to your `.env` file:

```ini
# PARSEDOWN

PARSEDOWN_LINKS = true
PARSEDOWN_ESCAPED = false
PARSEDOWN_LINEBREAKS = true
```

#### Facade

To add facade support, firstly uncomment the following line within `bootstrap/app.php`:

```php
// $app->withFacades();
```

then register the facade like so...

```php
$app->register(LaravelParsedown\Facades\Parsedown::class);
```

## Settings

|name      |description                     |default|
|----------|--------------------------------|-------|
|links     |Controls if links are rendered. |true   |
|escaped   |The maximum length of the hash. |false  |
|linebreaks|The characters used for hashing.|true   |

## Usage

### Line

```php
Parsedown::line('To lean more about **Parsedown**, visit [here](http://daringfireball.com/markdown).');
```

### Text

```php
Parsedown::line('To lean more about **Parsedown**, visit [here](http://daringfireball.com/markdown).');
```

## License

This library is licensed under [MIT](http://choosealicense.org/licenses/mit), see [license.md](license.md) for details.

## Donations

[![](https://www.buymeacoffee.com/assets/img/custom_images/black_img.png)](https://buymeacoffee.com/nblackburn)
