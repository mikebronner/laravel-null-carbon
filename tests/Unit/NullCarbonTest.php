<?php

use GeneaLabs\LaravelNullCarbon\NullCarbon;

test('casting to string returns empty string', function () {
    $nullCarbon = new NullCarbon();

    expect((string) $nullCarbon)->toBe('');
});

test('format returns empty string regardless of format', function () {
    $nullCarbon = new NullCarbon();

    expect($nullCarbon->format('Y-m-d'))->toBe('')
        ->and($nullCarbon->format('H:i:s'))->toBe('')
        ->and($nullCarbon->format('Y-m-d H:i:s'))->toBe('');
});

test('jsonSerialize returns json encoded null', function () {
    $nullCarbon = new NullCarbon();

    expect($nullCarbon->jsonSerialize())->toBe('null');
});

test('it extends Carbon', function () {
    $nullCarbon = new NullCarbon();

    expect($nullCarbon)->toBeInstanceOf(\Illuminate\Support\Carbon::class);
});
