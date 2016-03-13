# Domain Parser Bundle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

Symfony Bundle for [jeremykendall/php-domain-parser](https://github.com/jeremykendall/php-domain-parser).

## Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emanueleminotto/domain-parser-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EmanueleMinotto\DomainParserBundle\DomainParserBundle(),
        );

        // ...
    }

    // ...
}
```

## Readings:

 * [Configuration Reference](https://github.com/EmanueleMinotto/DomainParserBundle/tree/master/Resources/doc/configuration-reference.rst)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email minottoemanuele@gmail.com instead of using the issue tracker.

## Credits

- [Emanuele Minotto][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/emanueleminotto/domain-parser-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/EmanueleMinotto/DomainParserBundle/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/EmanueleMinotto/DomainParserBundle.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/EmanueleMinotto/DomainParserBundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/emanueleminotto/domain-parser-bundle
[link-travis]: https://travis-ci.org/EmanueleMinotto/DomainParserBundle
[link-scrutinizer]: https://scrutinizer-ci.com/g/EmanueleMinotto/DomainParserBundle/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/EmanueleMinotto/DomainParserBundle
[link-author]: https://github.com/EmanueleMinotto
[link-contributors]: ../../contributors
