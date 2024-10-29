<?php

namespace Sumer5020\ZohoBooks\Traits;

trait WithToQueryString
{
    /**
     * Converts the input object properties to a query string format.
     *
     * @return string
     */
    public function toQueryString(): string
    {
        return array_reduce($this->getKeys(), function ($result, $key) {
            if (property_exists($this, $key)) {
                $result .= "&" . $key . "=" . $this->$key;
            }
            return $result;
        }, "");
    }

    /**
     * Abstract method to get input keys.
     * The implementing class must define this method.
     *
     * @return array
     */
    abstract protected function getKeys(): array;
}
