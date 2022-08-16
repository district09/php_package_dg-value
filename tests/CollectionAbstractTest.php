<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value;

use ArrayIterator;
use DigipolisGent\Value\CollectionAbstract;
use DigipolisGent\Value\CollectionInterface;
use DigipolisGent\Value\ValueInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests the abstract Collection.
 *
 * @covers \DigipolisGent\Value\CollectionAbstract
 */
class CollectionAbstractTest extends TestCase
{
    /**
     * Test if the iterator method returns an ArrayIterator.
     *
     * @test
     */
    public function getIteratorMethodReturnsArrayIterator(): void
    {
        $collection = $this->getMockForAbstractClass(CollectionAbstract::class);
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /**
     * Not the same if they are not of the same type.
     *
     * @test
     */
    public function twoCollectionsAreNotSameValueIfDifferentTypes(): void
    {
        $collection1 = $this->createCollectionMock('Type1', new ArrayIterator());
        $collection2 = $this->createCollectionMock('Type2', new ArrayIterator());

        $this->assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if they have not the same amount of values.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameValueIfTheyHaveNotTheSameAmountOfValues(): void
    {
        $iterator1 = $this->createMock(ArrayIterator::class);
        $iterator1
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);
        $collection1 = $this->createCollectionMock('CollectionType', $iterator1);

        $iterator2 = $this->createMock(ArrayIterator::class);
        $iterator2
            ->expects($this->once())
            ->method('count')
            ->willReturn(2);
        $collection2 = $this->createCollectionMock('CollectionType', $iterator2);

        /** @var \DigipolisGent\Value\CollectionInterface $collection1 */
        $this->assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if the collection item keys are not the same.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameIfArrayKeysAreDifferent(): void
    {
        $value1 = $this->createMock(ValueInterface::class);
        $iterator1 = new ArrayIterator([0 => $value1]);
        $collection1 = $this->createCollectionMock('CollectionType', $iterator1);

        $value2 = $this->createMock(ValueInterface::class);
        $iterator2 = new ArrayIterator([1 => $value2]);
        $collection2 = $this->createCollectionMock('CollectionType', $iterator2);

        $this->assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * Not the same if the values on the same index are not the same.
     *
     * @test
     */
    public function twoCollectionsAreNotTheSameIfHaveNotTheSameValues(): void
    {
        $value1 = $this->createMock(ValueInterface::class);
        $value1
            ->expects($this->once())
            ->method('sameValueAs')
            ->willReturn(false);
        $iterator1 = new ArrayIterator([$value1]);
        $collection1 = $this->createCollectionMock('CollectionType', $iterator1);

        $value2 = $this->createMock(ValueInterface::class);
        $iterator2 = new ArrayIterator([$value2]);
        $collection2 = $this->createCollectionMock('CollectionType', $iterator2);

        $this->assertFalse($collection1->sameValueAs($collection2));
    }

    /**
     * The same if the values on the same index the same.
     *
     * @test
     */
    public function twoCollectionsAreTheSameIfHaveTheSameValues(): void
    {
        $value1 = $this->createMock(ValueInterface::class);
        $value1
            ->expects($this->once())
            ->method('sameValueAs')
            ->willReturn(true);
        $iterator1 = new ArrayIterator([$value1]);
        $collection1 = $this->createCollectionMock('CollectionType', $iterator1);

        $value2 = $this->createMock(ValueInterface::class);
        $iterator2 = new ArrayIterator([$value2]);
        $collection2 = $this->createCollectionMock('CollectionType', $iterator2);

        $this->assertTrue($collection1->sameValueAs($collection2));
    }

    /**
     * Helper to Create a collection mock.
     *
     * @param string $name
     *   The class name the mock should have.
     * @param \ArrayIterator $iterator
     *   The iterator the mocked abstract class should return.
     *
     * @return \DigipolisGent\Value\CollectionInterface|\PHPUnit\Framework\MockObject\MockObject
     *   The mocked CollectionAbstract.
     */
    protected function createCollectionMock($name, ArrayIterator $iterator): CollectionInterface
    {
        $mock = $this
            ->getMockBuilder(CollectionAbstract::class)
            ->disableOriginalConstructor()
            ->setMethods(array('getIterator'))
            ->setMockClassName($name)
            ->getMockForAbstractClass();
        $mock
            ->method('getIterator')
            ->willReturn($iterator);

        return $mock;
    }
}
