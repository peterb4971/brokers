<?php

namespace Tests\Tools;

trait WithRouteIsProtectedAssertionTrait
{
    public function assertRouteIsProtected($method, $uri){
        $response = $this->json($method, $uri);

        $response->assertUnauthorized();
    }
}
