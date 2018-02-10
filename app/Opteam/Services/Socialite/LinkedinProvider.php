<?php

namespace App\Opteam\Services\Socialite;

use Illuminate\Support\Arr;
use Laravel\Socialite\Two\LinkedInProvider as SocialiteLinkedinProvider;

class LinkedinProvider extends SocialiteLinkedinProvider {


    /**
     * The fields that are included in the profile.
     *
     * @var array
     */
    protected $fields = [
        'id', 'first-name', 'last-name', 'formatted-name',
        'email-address', 'headline', 'location', 'industry',
        'public-profile-url', 'picture-url', 'picture-urls::(original)',
    ];

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'nickname' => null,
            'name' => str_slug(Arr::get($user, 'formattedName')),
            'first_name'      => Arr::get($user, 'firstName'),
            'last_name'       => Arr::get($user, 'lastName'),
            'email' => Arr::get($user, 'emailAddress'),
            'avatar' => Arr::get($user, 'pictureUrl'),
            'avatar_original' => Arr::get($user, 'pictureUrls.values.0'),
        ]);
    }
}