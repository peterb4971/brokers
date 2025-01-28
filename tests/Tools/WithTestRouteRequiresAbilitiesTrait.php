<?php

namespace Tests\Tools;

trait WithTestRouteRequiresAbilitiesTrait
{
    use WithRouteRequiresAbilitiesAssertion;

    public function testRouteRequiresAbilities()
    {
        $this->assertRouteRequiresAbilities($this->method(), $this->uri());
    }
}
