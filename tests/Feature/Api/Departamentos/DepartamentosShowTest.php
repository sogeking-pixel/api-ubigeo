<?php
use App\Models\User;

test('authenticated users with token can get show departamento via API and receive JSON response', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $token = $response->json('token');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/departamentos/'.'La Libertad');

    $response->assertStatus(200);
    
    $response->assertJsonStructure([
        'success',
        'data' => [           
            'nombre',
            'num_provincias',
            'num_distritos'
        ],
    ]);

    $response->assertJsonFragment([
        'success'=>true
    ]);
    
});

test('do not enter the departamento correct, not get results and receive error JSON', function () {
    $user = User::factory()->create();
    
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $token = $response->json('token');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->getJson('/api/departamentos/'.'La Libertadasdf');

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
   
    $response = $this->getJson('/api/departamentos/'.'La Libertad');

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
    ])->getJson('/api/departamentos/'.'La Libertad');

    $response->assertStatus(401);
    
    $response->assertJsonStructure([
        'success',
        'message'        
    ]);

    $response->assertJsonFragment([
        'success'=>false
    ]);
    
});