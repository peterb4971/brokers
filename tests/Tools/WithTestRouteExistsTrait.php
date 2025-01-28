<?php

namespace Tests\Tools;

trait WithTestRouteExistsTrait
{
    use WithRouteExistsAssertion;

    public function testRouteExists()
    {
        $this->assertRouteExists($this->uri(), $this->method(), $this->route());
    }
}
