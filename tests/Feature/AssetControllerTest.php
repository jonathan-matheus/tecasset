<?php

it('cria um ativo com dados válidos', function () {
    $response = $this->postJson('/assets', [
        'patrimonio' => 'TI-0001',
        'tipo' => 'Notebook',
        'numero_serie' => 'SN1234ABCD',
    ]);

    $response->assertStatus(201);

    $this->assertDatabaseHas('assets', [
        'patrimonio' => 'TI-0001',
    ]);
});

it('rejeita a criação sem o campo obrigátorio patrimonio', function () {
    $response = $this->postJson('/assets', [
        'tipo' => 'Notebook',
        'numero_serie' => 'SN1234ABCD',
    ]);

    $response->assertStatus(422);

    $this->assertDatabaseMissing('assets', [
        'tipo' => 'Notebook',
        'numero_serie' => 'SN1234ABCD',
    ]);
});
