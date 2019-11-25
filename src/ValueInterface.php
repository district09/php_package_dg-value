<?php

declare(strict_types=1);

namespace DigipolisGent\Value;

/**
 * Interface for the base Value object.
 *
 * All values objects must implement at least this interface.
 *
 * @package DigipolisGent\Value
 */
interface ValueInterface
{
    /**
     * Compare of another ValueInterface has the exact same type.
     *
     * Checks if two value objects have the same class name.
     * - Not valid if one of them is a parent class.
     * - Not valid if one of them is a child class.
     *
     * @param \DigipolisGent\Value\ValueInterface $object
     *   The value object to check.
     *
     * @return bool
     *   True if the value type are the same, false if not.
     */
    public function sameValueTypeAs(ValueInterface $object): bool;

    /**
     * Compare two Value objects and tells whether they can be considered equal.
     *
     * The compared value is considered same if:
     * - They both share the same type; see ValueInterface::sameValueTypeAs().
     * - Their parameters are equal (as in equal by the domain logic).
     *
     * @param \DigipolisGent\Value\ValueInterface $object
     *   The value object to compare.
     *
     * @return bool
     *   True if the objects are equal, false if not.
     */
    public function sameValueAs(ValueInterface $object): bool;

    /**
     * Returns a string representation of the value object.
     *
     * @return string
     *   The string representing the value object.
     */
    public function __toString(): string;
}
