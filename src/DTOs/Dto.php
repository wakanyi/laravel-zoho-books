<?php

namespace Sumer5020\ZohoBooks\DTOs;

class Dto
{
    /**
     * @var array Inputs Keys
     */
    private array $_keys;

    /**
     * @param $keys
     * @return void
     */
    protected function setKeys($keys): void
    {
        $this->_keys = array_keys($keys);
    }

    /**
     * @return array
     */
    protected function getKeys(): array
    {
        return $this->_keys;
    }
}
