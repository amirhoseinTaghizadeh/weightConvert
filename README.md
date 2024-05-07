# A simple Package to Easily Convert Weight



---


1. Press the "Use this template" button at the top of this repo to create a new repo with the contents of this simpleweightconvert.
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files.
3. Have fun creating your package.





## Installation

You can install the package via composer:

```bash
///////////////
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="simpleweightconvert-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="simpleweightconvert-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="simpleweightconvert-views"
```

## Usage

```php
$simpleWeightConvert = new WeightConvert\SimpleWeightConvert();
echo $simpleWeightConvert->echoPhrase('Hello, WeightConvert!');
```

## Testing

```bash
composer test
```

## Changelog


## Contributing



## Security Vulnerabilities



## Credits



## License


