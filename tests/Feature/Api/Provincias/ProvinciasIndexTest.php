<?php
use App\Models\User;

test('authenticated users with token can get all provincas in a departamentos via API and receive JSON response', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $token = $response->json('token');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/departamentos/Lima/provincias');

    $response->assertStatus(200);
    
    $response->assertJsonStructure([
        'success',
        'data' => [
            '*' => [
                'nombre',
                'link_info',
                'link_distritos'                
            ],
        ],
    ]);

    $response->assertJsonFragment([
        'success'=>true
    ]);
    
});


test('do not enter the token, not get results and receive error JSON', function () {
   
    $response = $this->getJson('/api/departamentos/Lima/provincias');

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
    ])->getJson('/api/departamentos/Lima/provincias');

    $response->assertStatus(401);
    
    $response->assertJsonStructure([
        'success',
        'message'        
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});