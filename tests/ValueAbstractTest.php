<?php

declare(strict_types=1);

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
     *
     * @test
     */
    public function twoValuesAreNotTheSameTypeIfTheyDoNotHaveTheSameClassName(): void
    {
        $value1 = new class extends ValueAbstract {
            public function __toString(): string
            {
                return '';
            }

            public function sameValueAs(ValueInterface $object): bool
            {
                return $this->sameValueTypeAs($object);
            }
        };

        $value2 = new class extends ValueAbstract {
            public function __toString(): string
            {
                return '';
            }

            public function sameValueAs(ValueInterface $object): bool
            {
                return $this->sameValueTypeAs($object);
            }
        };

        $this->assertFalse($value1->sameValueAs($value2));
    }

    /**
     * Two values are the same type if they have the same class name.
     *
     * @test
     */
    public function twoValuesAreTheSameTypeIfTheyHaveTheSameClassName(): void
    {
        // Multiple anonymous classes created in the same position (say, a loop)
        // can be compared with `==`, but those created elsewhere will not match
        // as they will have a different name.
        $values = [];
        for ($i = 0; $i < 2; $i++) {
            $values[$i] = new class extends ValueAbstract {
                public function __toString(): string
                {
                    return '';
                }

                public function sameValueAs(ValueInterface $object): bool
                {
                    return $this->sameValueTypeAs($object);
                }
            };
        }

        $this->assertTrue($values[0]->sameValueAs($values[1]));
    }
}
