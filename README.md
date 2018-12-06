# Digipolis - Value objects

Package containing the interfaces and abstract implementations to support the
usage of Value objects in other packages and projects.

[![Latest Stable Version][ico-version]][link-packagist]
[![Latest Unstable Version][ico-version-unstable]][link-packagist]
[![Total Downloads][ico-downloads]][link-packagist]
[![License][ico-license]][link-license]

[![Build Status][ico-travis]][link-travis]
[![Maintainability][ico-maintainability]][link-maintainability]
[![Test Coverage][ico-test-coverage]][link-test-coverage]
![PHP from Packagist][ico-php-version]

## Usage

This package contains the following interfaces:

* `ValueInterface` : the basic interface for all value objects.
* `ValueFromArrayInterface` : extra interface that adds, to a value object, the
  static method to create it from an array of data.
* `ValueToArrayInterface` : extra interface that adds, to a value object, the
  method to extract its data as an array.
* `CollectonInterface` : the basic interface for a collection of values of the
  same type.

And the following abstract implementations:

* `ValueAbstract` : Abstract implementation of the `ValueInterface`, implements
  only the `sameValueTypeAs()` method.
* `CollectionAbstract` : Abstract implementation of the `CollectonInterface`,
  implements the method to compare two collections (`sameValueAs()`) and to get
  the collection as an iterator (`getIterator()`).

## Install

Install the package:

```bash
composer require digipolisgent/value
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed
recently.

## Testing

Run the test suite:

``` bash
vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more
information.

[ico-version]: https://img.shields.io/packagist/v/digipolisgent/value.svg?style=flat-square
[ico-version-unstable]: https://img.shields.io/packagist/vpre/digipolisgent/value.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/digipolisgent/value.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/digipolisgent/php_package_dg-value.svg?style=flat-square
[ico-travis]: https://api.travis-ci.com/digipolisgent/php_package_dg-value.svg?branch=master
[ico-maintainability]: https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/maintainability
[ico-test-coverage]: https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/test_coverage
[ico-php-version]: https://img.shields.io/packagist/php-v/digipolisgent/value.svg?style=flat-square
[ico-php7]: https://php7ready.timesplinter.ch/digipolisgent/php_package_dg-value/master/badge.svg

[link-packagist]: https://packagist.org/packages/digipolisgent/value
[link-license]: LICENSE.md
[link-travis]: https://travis-ci.com/digipolisgent/php_package_dg-value
[link-maintainability]: https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/maintainability
[link-test-coverage]: https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/test_coverage
[link-php7]: https://travis-ci.org/digipolisgent/php_package_dg-value
[link-author-digipolisgent]: https://github.com/digipolisgent
[link-contributors]: ../../contributors
