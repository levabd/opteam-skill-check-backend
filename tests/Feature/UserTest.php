<?php

namespace Tests\Feature;

use App\Opteam\Models\User;
use App\Opteam\Models\UserRole;
use Tests\TestCase;

class UserTest extends TestCase {

    /** @var \App\Opteam\Models\User */
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create(['role_id' => UserRole::firstOrCreate(['name' => 'admin'])->id]);
    }

    public function authenticate()
    {
        $this->postJson('/api/login', [
            'email'    => $this->user->email,
            'password' => 'secret',
        ])
            ->assertSuccessful()
            ->assertJsonStructure(['token', 'expires_in'])
            ->assertJson(['token_type' => 'bearer']);
    }

    /** @test */
    public function can_create()
    {
        $this->authenticate();
        $this->postJson('/api/admin/users', [
            'name'                  => 'Test User',
            'surname'               => 'Test User',
            'email'                 => 'test@test.app',
            'password'              => 'secret',
            'role_id'               => UserRole::firstOrCreate(['name' => 'trainee'])->id,
            'password_confirmation' => 'secret',
        ])
            ->assertSuccessful()
            ->assertJsonStructure(['id', 'name', 'email', 'surname']);
    }

    /** @test */
    public function can_update()
    {
        $this->authenticate();

        $this->getJson('/api/admin/users/' . $this->user->id . '/edit')
            ->assertSuccessful()
            ->assertJsonStructure(['id', 'name', 'email', 'surname'])
            ->assertJson($this->user->toArray());

        $this->patchJson('/api/admin/users/' . $this->user->id, [
            'id'       => $this->user->id,
            'name'     => 'Test User updated',
            'surname'  => 'Test User updated',
            'email'    => 'test@test.app',
            'password' => 'secret',
            'role_id'  => UserRole::firstOrCreate(['name' => 'trainee'])->id,
        ])
            ->assertSuccessful()
            ->assertJsonStructure(['id', 'name', 'email', 'surname'])
            ->assertJson([
                'id'      => $this->user->id,
                'name'    => 'Test User updated',
                'surname' => 'Test User updated',
                'email'   => 'test@test.app',
            ]);
    }

    /** @test */
    public function can_remove()
    {
        $this->authenticate();

        $user = factory(User::class)->create(['role_id' => UserRole::firstOrCreate(['name' => 'trainee'])->id]);

        $this->assertDatabaseHas('users', ['email' => $user->email]);

        $this->deleteJson('/api/admin/users/' . $user->id )
            ->assertSuccessful()
            ->assertJson(['status'=>'success']);

        $this->assertDatabaseMissing('users', ['email' => $user->email]);
    }
}
