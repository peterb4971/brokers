<?php

namespace Tests\Tools;

use Tests\Unit\UnitTestCase;

trait WithIsUnitTestCaseTrait
{
    public function testIsFeatureTestCase(): void
    {
        $this->assertTrue(is_subclass_of($this, UnitTestCase::class), 'This test-case is not inherited from UnitTestCase');
    }
}
