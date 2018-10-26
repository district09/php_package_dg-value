<?php

namespace DigipolisGent\Test\Value;

use DigipolisGent\Value\ValueAbstract;
use DigipolisGent\Value\ValueInterface;
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
     */
    public function testTwoValuesAreNotTheSameTypeIfTheyDoNotHaveTheSameClassName()
    {
        /* @var $value1 \DigipolisGent\Value\ValueInterface */
        $value1 = $this->getMockForAbstractClass(ValueAbstract::class, [], 'ClassName1');

        /* @var $value2 \DigipolisGent\Value\ValueInterface */
        $value2 = $this->getMockForAbstractClass(ValueAbstract::class, [], 'ClassName2');

        $this->assertFalse($value1->sameValueTypeAs($value2));
    }

    /**
     * Two values are the same type if they have the same class name.
     */
    public function testTwoValuesAreTheSameTypeIfTheyHaveTheSameClassName()
    {
        /* @var $value1 \DigipolisGent\Value\ValueInterface */
        $value1 = $this->getMockForAbstractClass(ValueAbstract::class, [], 'ClassTypeOne');

        /* @var $value2 \DigipolisGent\Value\ValueInterface */
        $value2 = $this->getMockForAbstractClass(ValueAbstract::class, [], 'ClassTypeOne');

        $this->assertTrue($value1->sameValueTypeAs($value2));
    }
}
