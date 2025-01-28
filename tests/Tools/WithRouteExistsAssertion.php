<?php

namespace Tests\Tools;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

trait WithRouteExistsAssertion
{
    /**
     * @param string $endpoint
     * @param string $endpointMethod
     * @param string $endpointName
     * @return void
     */
    public function assertRouteExists(string $endpoint, string $endpointMethod, string $endpointName): void
    {
        $endpoint = trim($endpoint, '/');

        $this->assertArrayHasKey(
            $endpoint,
            Route::getRoutes()->get($endpointMethod),
            'The route "' . $endpointMethod . '@' . $endpoint . '" not exists in registered routes.'
        );

        $this->assertTrue(
            Route::has($endpointName),
            'The route with name "' . $endpointName . '" not exists.'
        );

        $response = $this->json($endpointMethod, $endpoint);


        $this->assertNotEquals(
            Response::HTTP_METHOD_NOT_ALLOWED,
            $response->status(),
            'The route "' . $endpointMethod . '@' . $endpoint . '" returns invalid response code.'
        );
    }
}
