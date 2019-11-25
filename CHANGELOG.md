# Changelog

All Notable changes to the `digipolisgent/value` package.

## [Unreleased]

### Changed

- Bumped minimum PHP version to 7.2.
- Made the code strict.

### Removed

- Removed ValueFromArrayInterface and ValueToArrayInterface: better
  pattern is using Normalizers to transform data into ValueObjects and 
  Serializers to transform ValueObjects into arrays.
  See https://github.com/digipolisgent/php_package_dg-flanders-basicregisters/tree/develop/src/Normalizer/FromJson
  as example how to normalize data into value objects.

## [1.1.2]

### Changed

- Made the package open source.

## [1.1.1]

### Fixed

- Removed static from the toArray() method.

## [1.1.0]

### Added

- Added the ValueToArrayInterface.

## [1.0.0]

### Added

- Added the ValueInterface.
- Added the ValueFromArrayInterface.
- Added the ValueAbstract class.
- Added the CollectionInterface.
- Added the CollectionAbstract class.

[1.1.2]: https://github.com/digipolisgent/php_package_dg-value/compare/1.1.1...1.1.2
[1.1.1]: https://github.com/digipolisgent/php_package_dg-value/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/digipolisgent/php_package_dg-value/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/digipolisgent/php_package_dg-value/releases/tag/1.0.0
[Unreleased]: https://github.com/digipolisgent/php_package_dg-value/compare/master...develop
