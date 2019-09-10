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
        $value1 = new class extends ValueAbstract {

            public function __toString(): string
            {
                return '';
            }

            public function sameValueAs(ValueInterface $object): bool
            {
                return false;
            }
        };

        /* @var $value2 \DigipolisGent\Value\ValueInterface */
        $value2 = new class extends ValueAbstract {

            public function __toString(): string
            {
                return '';
            }

            public function sameValueAs(ValueInterface $object): bool
            {
                return false;
            }
        };

        $this->assertFalse($value1->sameValueTypeAs($value2));
    }

    /**
     * Two values are the same type if they have the same class name.
     */
    public function testTwoValuesAreTheSameTypeIfTheyHaveTheSameClassName()
    {
        // Multiple anonymous classes created in the same position (say, a loop)
        // can be compared with `==`, but those created elsewhere will not match
        // as they will have a different name.
        $values = [];
        for ($i=0; $i < 2; $i++) {
            $values[$i] = new class extends ValueAbstract {

                public function __toString(): string
                {
                    return '';
                }

                public function sameValueAs(ValueInterface $object): bool
                {
                    return false;
                }
            };
        }

        $this->assertTrue($values[0]->sameValueTypeAs($values[1]));
    }
}
