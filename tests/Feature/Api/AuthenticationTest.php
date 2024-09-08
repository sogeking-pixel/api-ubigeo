<?php

use App\Models\User;

test('users can autentication in the api, return token', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertStatus(200);
    
    $response->assertJsonStructure([
        'success', 'token','message'
    ]);

    $response->assertJsonFragment([
        'success'=>true
    ]);

    
});


test('users can not autentication in the api, return error', function () {
    
    $response = $this->postJson('/api/login', [
        'email' => 'hola@gmail.com',
        'password' => 'password',
    ]);

    $response->assertStatus(401);
    
    $response->assertJsonStructure([
        'success', 'message'
    ]);
    
    $response->assertJsonFragment([
        'success'=>false
    ]);

   
});


test('users with unverfied email, return error', function () {
    $user = User::factory()->unverified()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertStatus(403);

    $response->assertJsonStructure([
        'success', 'message'
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});