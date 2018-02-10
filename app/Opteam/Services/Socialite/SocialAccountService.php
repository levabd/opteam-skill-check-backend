<?php

namespace App\Opteam\Services\Socialite;

use Log;
use App\Opteam\Models\SocialAccount;
use App\Opteam\Models\SocialProviderType;
use App\Opteam\Models\User;
use App\Opteam\Models\UserRole;
use App\Opteam\Repos\SocialAccountRepo;
use App\Opteam\Services\Socialite\Contracts\SocialHandlerInterface;
use App\Opteam\Services\Socialite\Contracts\UserInterface as UserProvider;

class SocialAccountService implements SocialHandlerInterface {

    /**
     * @var SocialAccountRepo
     */
    private $accountRepo;

    public function __construct(SocialAccountRepo $accountRepo)
    {
        $this->accountRepo = $accountRepo;
    }

    /**
     * Get user
     *
     * @param string       $providerName
     * @param UserProvider $UserProvider
     *
     * @return User|null
     */
    public function getUser(string $providerName, UserProvider $UserProvider): ?User
    {
        $account = $this->accountRepo->findUserInProvider($providerName, $UserProvider->getId());

        return $account ? $account->user : null;
    }

    /**
     * Register user
     *
     * @param string       $providerName
     * @param UserProvider $userProvider
     *
     * @return User
     */
    public function registerUser(string $providerName, UserProvider $userProvider): User
    {
        $account = SocialAccount::where('provider_user_id', $userProvider->getId())->get()->first();
        if ( ! $account)
        {
            $account = new SocialAccount([
                'provider_user_id' => $userProvider->getId(),
            ]);
        }

        $user = User::whereEmail($userProvider->getEmail())->first();

        if ($user)
        {
            return $user;
        }

        try
        {
            $user = User::create([
                'email'    => $userProvider->getEmail(),
                'name'     => $userProvider->getFirstName(),
                'surname'  => $userProvider->getLastName(),
                'role_id'  => UserRole::whereName('trainee')->get()->first()->id,
                'password' => md5(rand(1, 10000)),
            ]);
        } catch (\Exception $e)
        {
            Log::error('SocialAccountService::registerUser: error to save user while registration', [$e->getMessage()]);
        }


        try
        {
            $account->user()->associate($user);
            $account->provider()->associate(SocialProviderType::whereName($providerName)->get()->first());
            $account->save();

        } catch (\Exception $e)
        {
            Log::error('SocialAccountService::registerUser: error to associate user with provider', [$e->getMessage()]);
        }

        return $user;
    }
}