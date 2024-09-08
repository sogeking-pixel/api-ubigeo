<?php

use Database\Seeders\RoleSeeder;

test('registration screen can be rendered', function () {
    $response = $this->get('/register-admin');

    $response->assertStatus(200);
});

test('new users admins can register', function () {
    $this->seed(RoleSeeder::class);
    $response = $this->post('/register-admin', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password12',
        'password_confirmation' => 'password12',
        'secret_key'=>env('ADMIN_SECRET_KEY')
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('verification.notice', absolute: false));
});