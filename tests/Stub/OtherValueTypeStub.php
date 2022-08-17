<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value\Stub;

use DigipolisGent\Value\ValueAbstract;
use DigipolisGent\Value\ValueInterface;

/**
 * Same functionality as ValueStub, different object.
 */
final class OtherValueTypeStub extends ValueAbstract
{
    /**
     * @inheritDoc
     */
    public function sameValueAs(ValueInterface $object): bool
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return 'foo';
    }
}
