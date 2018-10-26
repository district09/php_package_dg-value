# Digipolis - Value objects

Package containing the interfaces and abstract implementations to support the
usage of Value objects in packages and projects.

[![Maintainability](https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/maintainability)](https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/maintainability)
[![Maintainability](https://api.codeclimate.com/v1/badges/316c85fff5a298e6450c/test_coverage)](https://codeclimate.com/repos/5bd2f0f01155160cf60025f7/test_coverage)

## Install

Add the package repository to composer.json:

``` json
{
    ...
    "repositories": [
        ...
        {
            "type": "composer",
            "url": "https://packagist.gentgrp.gent.be"
        },
        ...
    ],
    ...
}
```

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
