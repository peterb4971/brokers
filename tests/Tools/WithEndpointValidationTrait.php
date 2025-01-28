<?php

namespace Tests\Tools;

trait WithEndpointValidationTrait
{
    use WithRouteExistsAssertion;

    public function testEndpointExists(): void
    {
        $this->assertRouteExists(
            $this->uri(),
            $this->method(),
            $this->route()
        );
    }
}
