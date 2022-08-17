<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value\Stub;

use DigipolisGent\Value\CollectionAbstract;

/**
 * Stub to test the collection functionality.
 */
final class OtherCollectionStub extends CollectionAbstract
{
    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return 'foo';
    }
}
