<?php

declare(strict_types=1);

namespace DigipolisGent\Value;

use IteratorAggregate;

/**
 * Interface for the base ValueCollection object.
 *
 * All collections must implement this interface.
 *
 * @package DigipolisGent\Value
 */
interface CollectionInterface extends IteratorAggregate, ValueInterface
{

}
