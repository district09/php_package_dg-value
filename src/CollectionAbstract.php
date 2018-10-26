<?php

namespace DigipolisGent\Value;

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
    protected $values = [];

    /**
     * Compare two Collection objects and check if they can be considered equal.
     *
     * @param \DigipolisGent\Value\ValueInterface|\DigipolisGent\Value\CollectionInterface
     *   Collection to compare this collection with.
     *
     * @return bool
     *   Both have the same values.
     */
    public function sameValueAs(ValueInterface $collection)
    {
        /* @var $collection \DigipolisGent\Value\CollectionInterface */
        if (!$this->sameValueTypeAs($collection)) {
            return false;
        }

        if (!$this->sameCollectionCount($collection)) {
            return false;
        }

        if (!$this->sameCollectionValues($collection)) {
            return false;
        }

        return true;
    }

    /**
     * Get the ArrayIterator containing all values in this collection.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }

    /**
     * Check if the collection has the same amount of items as this collection.
     *
     * @param \DigipolisGent\Value\CollectionInterface
     *   Collection to compare this collection with.
     *
     * @return bool
     *   Has the same amount of items.
     */
    protected function sameCollectionCount(CollectionInterface $collection)
    {
        $collectionIterator = $collection->getIterator();
        return $this->getIterator()->count() === $collectionIterator->count();
    }

    /**
     * Check if the collection has the same values as this collection.
     *
     * @param \DigipolisGent\Value\CollectionInterface
     *   Collection to compare this collection with.
     *
     * @return bool
     *   Has the same values.
     */
    protected function sameCollectionValues(CollectionInterface $collection)
    {
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
