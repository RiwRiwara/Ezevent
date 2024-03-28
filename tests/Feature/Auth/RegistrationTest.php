<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Role;
use Illuminate\Support\Str;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {

        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {

        $response = $this->post('/register', [
            'user_id' =>  Str::uuid(),
            'first_name' => 'Awirut',
            'last_name' => 'Phuseansaart',
            'email' => 'awirut2629@gmail.com',
            'password' => '.Awirut3526293',
            'password_confirmation' => '.Awirut3526293',
            'gender' => '1',
            'mobile_number' => '0925121273',
            'date_of_birth' => '2024-02-07 00:00:00',
            'address' => '12/345',
            'city' => '140101',
            'district' => '1401',
            'province' => '5',
            'zipcode' => '10260',
            'role_id' => 1,
            'email_verified_at' => '2024-02-22 15:22:04',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
