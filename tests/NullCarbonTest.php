<?php

use GeneaLabs\LaravelNullCarbon\NullCarbon;
use Illuminate\Support\Carbon;

it('extends Carbon', function () {
    $nullCarbon = new NullCarbon;

    expect($nullCarbon)->toBeInstanceOf(Carbon::class);
});

it('returns empty string when cast to string', function () {
    $nullCarbon = new NullCarbon;

    expect((string) $nullCarbon)->toBe('');
});

it('returns empty string when formatted', function () {
    $nullCarbon = new NullCarbon;

    expect($nullCarbon->format('Y-m-d'))->toBe('');
});

it('returns json encoded null when serialized', function () {
    $nullCarbon = new NullCarbon;

    expect($nullCarbon->jsonSerialize())->toBe('null');
});

it('can be instantiated without arguments', function () {
    $nullCarbon = new NullCarbon;

    expect($nullCarbon)->not->toBeNull();
});
