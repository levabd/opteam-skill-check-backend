<?php

namespace App\Opteam\Services\Socialite;

class FacebookProvider extends \Laravel\Socialite\Two\FacebookProvider {

    protected $fields = [
        'name', 'email', 'gender', 'verified', 'link', 'first_name', 'last_name', 'address', 'location'
    ];

    protected function mapUserToObject(array $user)
    {
        $avatarUrl = $this->graphUrl . '/' . $this->version . '/' . $user['id'] . '/picture';

        return (new User())->setRaw($user)->map([
            'id'              => $user['id'],
            'nickname'        => null,
            'name'            => isset($user['name']) ? str_slug($user['name']) : null,
            'first_name'      => isset($user['first_name']) ? $user['first_name'] : null,
            'last_name'       => isset($user['last_name']) ? $user['last_name'] : null,
            'email'           => isset($user['email']) ? $user['email'] : null,
            'avatar'          => $avatarUrl . '?type=normal',
            'avatar_original' => $avatarUrl . '?width=1920',
            'address'         => isset($user['address']) ? $user['address'] : null,
            'location'        => isset($user['location']) ? $user['location'] : null,
            'profileUrl'      => isset($user['link']) ? $user['link'] : null,
        ]);
    }
}