<?php

namespace App\Opteam\Services\Guard;

use App\Opteam\Models\User;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
/**
 * Class AccessUserProvider implements Wipon's specific requirements
 *
 * @package Wipon\Services
 */
class UserProvider extends EloquentUserProvider {
    /**
     * Validate a user against the given credentials.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  array $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        /**
         * @var User $user
         */
        $plain = $credentials['password'].env('APP_KEY', 'base64:UxG38O2RZi7lKNyy/BqZEh+RUo7cEYhkWP/xlQS5CKA=');

        return $this->hasher->check($plain, $user->getAuthPassword());
    }
}