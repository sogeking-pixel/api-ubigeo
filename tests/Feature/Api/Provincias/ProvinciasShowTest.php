<?php
use App\Models\User;

test('authenticated users with token can get show provincias via API and receive JSON response', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $token = $response->json('token');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/provincias/'.'Pacasmayo');

    $response->assertStatus(200);
    
    $response->assertJsonStructure([
        'success',
        'data' => [           
            'nombre',
            'num_distritos'
        ],
    ]);

    $response->assertJsonFragment([
        'success'=>true
    ]);
    
});

test('do not enter the provincia correct, not get results and receive error JSON', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $token = $response->json('token');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/provincias/'.'4g23f');

    $response->assertStatus(404);
    
    $response->assertJsonStructure([
        'success',
        'message'
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});

test('do not enter the token, not get results and receive error JSON', function () {
   
    $response = $this->getJson('/api/provincias/'.'Pacasmayo');

    $response->assertStatus(401);
    
    $response->assertJsonStructure([
        'success',
        'message'        
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});

test('do enter the token incorrect, not get results and receive error JSON', function () {
   
    $response = $this->withHeaders([
        'Authorization' => 'Bearer kldafklasjdf;laksdjf',
    ])->getJson('/api/provincias/'.'Pacasmayo');

    $response->assertStatus(401);
    
    $response->assertJsonStructure([
        'success',
        'message'        
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});