<?php

namespace DigipolisGent\Value;

/**
 * Interface adding the possibility to create the value object from array data.
 *
 * @package DigipolisGent\Value
 */
interface ValueFromArrayInterface
{
    /**
     * Returns a value object based on values extracted from the given array.
     *
     * @param array $data
     *   The data to create the value from.
     *
     * @return ValueInterface
     */
    public static function fromArray(array $data);
}
