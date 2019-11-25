<?php

declare(strict_types=1);

namespace DigipolisGent\Value;

/**
 * Abstract implementation of the ValueInterface.
 *
 * Provides the shared method to validate if 2 values are the same type.
 *
 * @package DigipolisGent\Value
 */
abstract class ValueAbstract implements ValueInterface
{
    /**
     * Compare of another ValueInterface has the exact same type.
     *
     * Checks if two value objects have the same class name.
     * - Not valid if one of them is a parent class.
     * - Not valid if one of them is a child class.
     *
     * @param \DigipolisGent\Value\ValueInterface $object
     *   The value object to check.
     *
     * @return bool
     *   True if the value type are the same, false if not.
     */
    protected function sameValueTypeAs(ValueInterface $object): bool
    {
        return get_class($this) === get_class($object);
    }
}
