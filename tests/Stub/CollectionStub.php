<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value\Stub;

use DigipolisGent\Value\CollectionAbstract;

/**
 * Stub to test the collection functionality.
 */
class CollectionStub extends CollectionAbstract
{
    /**
     * Create collection from multiple values.
     *
     * @param \DigipolisGent\Test\Value\Stub\ValueStub[] $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return 'Test 123';
    }
}
