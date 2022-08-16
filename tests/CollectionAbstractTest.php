<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value;

use DigipolisGent\Test\Value\Stub\CollectionStub;
use DigipolisGent\Test\Value\Stub\OtherCollectionStub;
use DigipolisGent\Test\Value\Stub\ValueStub;
use PHPUnit\Framework\TestCase;

/**
 * Tests the abstract Collection.
 *
 * @covers \DigipolisGent\Value\CollectionAbstract
 */
class CollectionAbstractTest extends TestCase
{
    /**
     * Collection provides iterator containing all values.
     *
     * @test
     */
    public function iteratorContainsAllCollectionValues(): void
    {
        $collection = new CollectionStub([new ValueStub('1'), new ValueStub('2')]);

        $iterator = $collection->getIterator();
        self::assertEquals(new ValueStub('1'), $iterator->offsetGet(0));
        self::assertEquals(new ValueStub('2'), $iterator->offsetGet(1));
    }

    /**
     * Not the same if they values are not of the same type.
     *
     * @test
     */
    public function twoCollectionsAreNotSameValueIfDifferentTypes(): void
    {
        $collection1 = new CollectionStub([]);
        $collection2 = new OtherCollectionStub([]);

        self::assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if collections have not the same amount of values.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameValueIfTheyHaveNotTheSameAmountOfValues(): void
    {
        $collection1 = new CollectionStub([]);
        $collection2 = new CollectionStub([new ValueStub('1')]);

        /** @var \DigipolisGent\Value\CollectionInterface $collection1 */
        self::assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if the collections item keys are not the same.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameIfArrayKeysAreDifferent(): void
    {
        $collection1 = new CollectionStub([1 => new ValueStub('1')]);
        $collection2 = new CollectionStub([2 => new ValueStub('1')]);

        self::assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if the values on the same index are not the same.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameIfHaveNotTheSameValues(): void
    {
        $collection1 = new CollectionStub([new ValueStub('1')]);
        $collection2 = new CollectionStub([new ValueStub('2')]);

        self::assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * The same if the values on the same index are the same values.
     *
     * @test
     */
    public function twoCollectionsAreTheSameIfHaveTheSameValues(): void
    {
        $collection1 = new CollectionStub([new ValueStub('1')]);
        $collection2 = new CollectionStub([new ValueStub('1')]);

        self::assertTrue($collection1->sameValueAs($collection2));
    }
}
