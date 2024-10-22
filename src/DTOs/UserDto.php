<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class UserDto
 * Data Transfer Object for a User.
 */
class UserDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Name of the user (Required) */
     private string $name;

    /** @var string Email address of the user (Required) */
     private string $email;

    /** @var string Role ID of the user */
     private string $role_id;

    /** @var float Hourly cost rate */
     private float $cost_rate;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->name = $data['name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->role_id = $data['role_id'] ?? '';
        $this->cost_rate = $data['cost_rate'] ?? 0.0;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result[$key] = $this->$key;
            }
            return $result;
        }, []);
    }
}
