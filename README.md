# Digipolis - Value objects

Package containing the interfaces and abstract implementations to support the
usage of Value objects in other packages and projects.

[![Maintainability](https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/maintainability)](https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/maintainability)
[![Maintainability](https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/test_coverage)](https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/test_coverage)

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
