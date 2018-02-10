<?php

namespace App\Opteam\Services\Socialite;

use Laravel\Socialite\Two\User as BaseSolialiteUser;
use App\Opteam\Services\Socialite\Contracts\UserInterface;
use App;
use Mockery;

class User extends BaseSolialiteUser implements UserInterface {

    protected $fillable = [
        'name', 'email', 'password', 'surname'
    ];

    protected $first_name;
    protected $last_name;
    protected $address;

    /**
     * Get the user's first name.
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name ?? $this->nickname ?? $this->name;
    }

    /**
     * Get the user's last name.
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name ?? $this->surname ?? $this->lastName;

    }

    /**
     * Get the address for the user.
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}