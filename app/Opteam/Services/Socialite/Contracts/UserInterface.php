<?php

namespace App\Opteam\Services\Socialite\Contracts;

use Laravel\Socialite\Contracts\User as ProviderUser;

interface UserInterface extends ProviderUser {


    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Get the user's last name.
     *
     * @return string
     */
    public function getLastName();

    /**
     * Get the address for the user.
     *
     * @return string
     */
    public function getAddress();
}