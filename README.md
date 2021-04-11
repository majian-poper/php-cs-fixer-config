# php-cs-fixer-config

PHP CS Fixer config for POPER PHP projects

## Installation

Run

```shell
$ composer require --dev poper/php-cs-fixer-config
```


Add to composer.json;

```json
"scripts": {
    "cs-fix": "php-cs-fixer fix -v --diff",
}
```

## Usage

### Configuration

Create a configuration file `.php_cs.dist` in the root of your project:

```php
<?php

use Poper\PhpCsFixer\Config;

$config = new Config();

$config->getFinder()->in(__DIR__ . '/src');
$config->setCacheFile(__DIR__ . '/.php_cs.cache');

return $config;
```

### Git

Add `.php_cs.cache` (the cache file created by `php-cs-fixer`) to `.gitignore`:

```
/vendor/
/.php_cs.cache
```

## Fixing

If you need to fix files, just run

```
$ composer cs-fix
```

## License

This package is licensed using the MIT License.
