<?php

namespace Tests\Tools;

use App\Models\User;
use Laravel\Sanctum\Sanctum;

trait WithRouteRequiresAbilitiesAssertion
{
    public function assertRouteRequiresAbilities($method, $uri, $params = [])
    {
        Sanctum::actingAs(User::factory()->create());

        $this->json($method, $uri, $params)->assertForbidden();
    }
}
