<?php

use FurkanMeclis\PttKargo\Facades\PttKargo;

it('can resolve facade', function () {
    $client = PttKargo::getFacadeRoot();

    expect($client)->not->toBeNull();
});
