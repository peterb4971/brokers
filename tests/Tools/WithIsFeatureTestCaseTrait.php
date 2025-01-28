<?php

namespace Tests\Tools;

use Tests\Feature\FeatureTestCase;

trait WithIsFeatureTestCaseTrait
{
    public function testIsFeatureTestCase(): void
    {
        $this->assertTrue(is_subclass_of($this, FeatureTestCase::class), 'This test-case is not inherited from FeatureTestCase');
    }
}
