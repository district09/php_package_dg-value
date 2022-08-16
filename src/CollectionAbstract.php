<?php

declare(strict_types=1);

namespace DigipolisGent\Value;

use ArrayIterator;

/**
 * Object value representing a collection of items.
 *
 * @package DigipolisGent\Value
 */
abstract class CollectionAbstract extends ValueAbstract implements CollectionInterface
{
    /**
     * Collection of values.
     *
     * @var \DigipolisGent\Value\ValueInterface[]
     */
    protected array $values = [];

    /**
     * Compare two Collection objects and check if they can be considered equal.
     *
     * @param \DigipolisGent\Value\ValueInterface $object
     *   Value object to compare this collection with.
     *
     * @return bool
     *   Both have the same values.
     */
    public function sameValueAs(ValueInterface $object): bool
    {
        /** @var \DigipolisGent\Value\CollectionInterface $object */
        if (!$this->sameValueTypeAs($object)) {
            return false;
        }

        if (!$this->sameCollectionCount($object)) {
            return false;
        }

        if (!$this->sameCollectionValues($object)) {
            return false;
        }

        return true;
    }

    /**
     * Get the ArrayIterator containing all values in this collection.
     *
     * @return \ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->values);
    }

    /**
     * Check if the collection has the same amount of items as this collection.
     *
     * @param \DigipolisGent\Value\CollectionInterface $collection
     *   Collection to compare this collection with.
     *
     * @return bool
     *   Has the same amount of items.
     */
    protected function sameCollectionCount(CollectionInterface $collection): bool
    {
        /** @var \ArrayIterator $collectionIterator */
        $collectionIterator = $collection->getIterator();
        return $this->getIterator()->count() === $collectionIterator->count();
    }

    /**
     * Check if the collection has the same values as this collection.
     *
     * @param \DigipolisGent\Value\CollectionInterface $collection
     *   Collection to compare this collection with.
     *
     * @return bool
     *   Has the same values.
     */
    protected function sameCollectionValues(CollectionInterface $collection): bool
    {
        /** @var \ArrayIterator $collectionIterator */
        $collectionIterator = $collection->getIterator();
        foreach ($this as $index => $item) {
            if (!$collectionIterator->offsetExists($index)) {
                return false;
            }

            $collectionItem = $collectionIterator->offsetGet($index);
            if (!$item->sameValueAs($collectionItem)) {
                return false;
            }
        }

        return true;
    }
}
