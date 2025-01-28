<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;

abstract class FeatureTestCase extends \Tests\TestCase
{
    abstract public function method(): string;
    abstract public function uri(): string;
    abstract public function route(): string;

    protected function setUp(): void
    {
        parent::setUp();
    }
}
