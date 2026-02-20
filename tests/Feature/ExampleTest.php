<?php

declare(strict_types=1);

it('returns a successful response from API status endpoint', function () {
    $response = $this->getJson('/api/v1/status');

    $response->assertStatus(200)
        ->assertJson(['status' => 'operational']);
});
