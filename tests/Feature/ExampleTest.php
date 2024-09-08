<?php

it('returns a successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

it('returns a successful response documents', function () {
    $response = $this->get('/docs');
    $response->assertStatus(200);
});

it('returns a successful response documents Departamentos', function () {
    $response = $this->get('/docs/consulta-departamento');
    $response->assertStatus(200);
});

it('returns a successful response documents Provincias', function () {
    $response = $this->get('/docs/consulta-provincia');
    $response->assertStatus(200);
});

it('returns a successful response documents Distritos', function () {
    $response = $this->get('/docs/consulta-distrito');
    $response->assertStatus(200);
});