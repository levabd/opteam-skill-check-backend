<?php

namespace App\Opteam\Services\Socialite\Contracts;


interface SocialHandlerInterface {


    /**
     * Get user
     *
     * @param string        $providerName
     * @param UserInterface $UserProvider
     *
     * @return \App\Opteam\Models\User ;
     */
    public function getUser(string $providerName, UserInterface $UserProvider);

    /**
     * Create user
     *
     * @param string        $providerName
     * @param UserInterface $UserProvider - user model
     *
     * @return mixed
     */
    public function registerUser(string $providerName, UserInterface $UserProvider);
}