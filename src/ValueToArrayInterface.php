<?php

declare(strict_types=1);

namespace DigipolisGent\Value;

/**
 * Interface adding the possibility to get an array representation of the value.
 *
 * @package DigipolisGent\Value
 *
 * @deprecated Use serializers to transfer data into arrays.
 */
interface ValueToArrayInterface
{
    /**
     * Returns a value object based on values extracted from the given array.
     *
     * @return array
     *   The data array representing the value object.
     */
    public function toArray(): array;
}
