<?php

namespace Sumer5020\ZohoBooks\Traits;

trait WithToArray
{
    /**
     * Converts the input object properties to an array format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_reduce($this->getKeys(), function ($result, $key) {
            if (property_exists($this, $key)) {
                $result[$key] = $this->$key;
            }
            return $result;
        }, []);
    }

    /**
     * Abstract method to get input keys.
     * The implementing class must define this method.
     *
     * @return array
     */
    abstract protected function getKeys(): array;
}
