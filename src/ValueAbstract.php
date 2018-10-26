<?php

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
     * @inheritdoc
     */
    public function sameValueTypeAs(ValueInterface $object)
    {
        return \get_class($this) === \get_class($object);
    }
}