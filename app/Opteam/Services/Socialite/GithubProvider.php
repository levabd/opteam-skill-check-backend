<?php


namespace App\Opteam\Services\Socialite;
use Illuminate\Support\Arr;
use Laravel\Socialite\Two\GithubProvider as SocialiteGithubProvider;


class GithubProvider extends SocialiteGithubProvider {


    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'nickname' => null,
            'name' => str_slug(Arr::get($user, 'login')),
            'first_name'      => Arr::get($user, 'login'),
            'last_name'       => Arr::get($user, 'login'),
            'email' => Arr::get($user, 'email'),
            'avatar' => Arr::get($user, 'avatar'),
            'avatar_original' => Arr::get($user, 'avatar'),
        ]);
    }
}