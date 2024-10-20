<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class UserDTO
 * Data Transfer Object for a User.
 */
class UserDto
{
    /** @var string Name of the user (Required) */
    public string $name;

    /** @var string Email address of the user (Required) */
    public string $email;

    /** @var string Role ID of the user */
    public string $role_id;

    /** @var float Hourly cost rate */
    public float $cost_rate;

    /**
     * UserDto constructor.
     *
     * @param array $data Data for the User.
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->role_id = $data['role_id'] ?? '';
        $this->cost_rate = $data['cost_rate'] ?? 0.0;
    }
}
