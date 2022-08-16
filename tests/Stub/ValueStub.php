<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value\Stub;

use DigipolisGent\Value\ValueAbstract;
use DigipolisGent\Value\ValueInterface;

/**
 * Stub implementing the ValueAbstract class.
 */
class ValueStub extends ValueAbstract
{
    /**
     * The actual value.
     *
     * @param string $value;
     */
    private $value;

    /**
     * Create from string.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    public function sameValueAs(ValueInterface $object): bool
    {
        /** @var \DigipolisGent\Test\Value\Stub\ValueStub $object */
        return $this->sameValueTypeAs($object)
            && $this->value === $object->value;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
