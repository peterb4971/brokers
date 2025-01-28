<?php

namespace Tests\Tools;

trait WithTestRouteIsProtectedTrait
{
    use WithRouteIsProtectedAssertionTrait;

    public function testRouteIsProtected()
    {
        $this->assertRouteIsProtected($this->method(), $this->uri());
    }
}
