<?php

declare(strict_types=1);

namespace DigipolisGent\Test\Value;

use DigipolisGent\Test\Value\Stub\OtherValueTypeStub;
use DigipolisGent\Test\Value\Stub\ValueStub;
use PHPUnit\Framework\TestCase;

/**
 * Tests the abstract Value implementation.
 *
 * @covers \DigipolisGent\Value\ValueAbstract
 */
class ValueAbstractTest extends TestCase
{
    /**
     * Two values are not the same type if they have not the same class name.
     *
     * @test
     */
    public function twoValuesAreNotTheSameTypeIfTheyDoNotHaveTheSameClassName(): void
    {
        $value1 = new ValueStub('Value 1');
        $value2 = new OtherValueTypeStub('Value 1');

        self::assertFalse($value1->sameValueAs($value2));
    }

    /**
     * Two values are the same type if they have the same class name.
     *
     * @test
     */
    public function twoValuesAreTheSameTypeIfTheyHaveTheSameClassName(): void
    {
        $value1 = new ValueStub('Value 1');
        $value2 = new ValueStub('Value 1');

        self::assertTrue($value1->sameValueAs($value2));
    }
}
