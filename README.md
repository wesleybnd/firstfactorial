# FirstFactorial

[![Source Code](http://img.shields.io/badge/source-wesleybnd/firstfactorial-blue.svg?style=flat-square)](https://github.com/wesleybnd/firstfactorial)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/wesleybnd/firstfactorial.svg?style=flat-square)](https://packagist.org/packages/wesleybnd/firstfactorial)
[![Latest Version](https://img.shields.io/github/release/wesleybnd/firstfactorial.svg?style=flat-square)](https://github.com/wesleybnd/cafeapi/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/wesleybnd/firstfactorial.svg?style=flat-square)](https://scrutinizer-ci.com/g/wesleybnd/firstfactorial)
[![Quality Score](https://img.shields.io/scrutinizer/g/wesleybnd/firstfactorial.svg?style=flat-square)](https://scrutinizer-ci.com/g/wesleybnd/firstfactorial)
[![Total Downloads](https://img.shields.io/packagist/dt/wesleybnd/firstfactorial.svg?style=flat-square)](https://packagist.org/packages/wesleybnd/firstfactorial)

###### PHP * Find the first factorial of the inner numbers less than or equal to 20

PHP * Encontre o primeiro fatorial dos números internos menores ou igual a 20

### Highlights

- Optimized Algorithm (Simple installation)
- Only accepts numbers equal to or less than 21 (integer type value limit)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

FirstFactorial is available via Composer:

```bash
"wesleybnd/firstfactorial": "^1.0"
```
or run

```bash
composer require wesleybnd/firstfactorial
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### User endpoint:

```php
<?php

require "../vendor/autoload.php";

use wesleybnd\FirstFactorial\App\Factorial;

//parametro de exemplo igual a 20
echo Factorial::firstFactorial(20);  

```

## Contributing

Please see [CONTRIBUTING](https://github.com/weslebnd/firstfactorial/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Wesley Bernardo](https://github.com/wesleybnd) (Developer)
- [All Contributors](https://github.com/wesleybnd/firstfactorial/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/wesleybnd/firstfactorial/blob/master/LICENSE) for more information.