<?php

namespace Tests\Feature;

use Tests\TestCase;
use Faker\Generator;
use Faker\Factory;
use App\Models\User;

class JWTAuthControllerTest extends TestCase
{
    /**
     * Summary of faker
     * @var Generator
     */
    private Generator $faker;
    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create('pt_BR');
    }

    public function test_register_the_user_with_all_params_returns_a_successful_response(): void
    {
        /* Arrange */
        $password = 'onflypassword';
        $data = [
            'name' => $this->faker->name(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => $password,
            'password_confirmation' => $password
        ];
        /* Act */
        $response = $this->post('/api/register', $data);
        
        /* Assert */
        $response->assertStatus(201);
        $response->assertCreated();
        $response->assertJsonStructure([
            'user' => [
                'name',
                'first_name',
                'last_name',
                'email',
                'updated_at',
                'created_at',
                'id'
            ],
            'token'
        ]);
        $response->assertJsonFragment(['name' => $data['name']]);
        $response->assertJsonIsObject();
        $response->assertJsonPath('user.name', $data['name']);
        $response->assertJsonPath('user.first_name', $data['firstName']);
        $response->assertJsonPath('user.last_name', $data['lastName']);
        $response->assertJsonPath('user.email', $data['email']);
    }

    public function test_register_the_user_without_all_params_returns_a_error_response(): void
    {
        /* Arrange and Act */
        $response = $this->post('/api/register');
        
        /* Assert */
        $response->assertStatus(400);
        $response->assertBadRequest();
        $response->assertJsonStructure([
            'name',
            'email',
            'password'
        ]);
        $response->assertJsonFragment(['name' => ['The name field is required.']]);
        $response->assertJsonFragment(['email' => ['The email field is required.']]);
        $response->assertJsonFragment(['password' => ['The password field is required.']]);
        $response->assertJsonIsObject();
        $response->assertJsonPath('name', ['The name field is required.']);
        $response->assertJsonPath('email', ['The email field is required.']);
        $response->assertJsonPath('password', ['The password field is required.']);
    }

    public function test_login_with_all_params_returns_a_successful_response(): void
    {
        /* Arrange */
        $user = User::factory()->create([
            'password' => 'onflypassword'
        ]);
        
        $password = 'onflypassword';
        $data = [
            'email' => $user->email,
            'password' => $password,
        ];
        /* Act */
        $response = $this->post('/api/login', $data);
        
        /* Assert */
        $response->assertStatus(200);
        $response->assertOk();
        $response->assertJsonStructure([
            'token'
        ]);
    }

    public function test_login_without_all_params_returns_a_error_response(): void
    {
        /* Arrange and Act */
        $response = $this->post('/api/login');
        
        /* Assert */
        $response->assertStatus(401);
        $response->assertUnauthorized();
        $response->assertJsonStructure([
            'error'
        ]);
        $response->assertJsonPath('error', 'Invalid credentials');
    }
}
