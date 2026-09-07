<?php

it('retorna status ok na rota /status', function () {
    $response = $this->get('/status');
    $response->assertStatus(200);
    $response->assertSee('TecAsset está no ar!');
});
