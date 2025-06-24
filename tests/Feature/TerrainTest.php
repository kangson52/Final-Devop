<?php

it('has terrain page', function () {
    $response = $this->get('/terrain');

    $response->assertStatus(200);
});

it('can list terrains', function () {
    \App\Models\Terrain::factory()->count(3)->create();
    $response = $this->get('/api/terrains');
    $response->assertStatus(200);
});

