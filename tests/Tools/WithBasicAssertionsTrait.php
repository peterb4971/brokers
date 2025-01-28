<?php

namespace Tests\Tools;

use Illuminate\Http\Response;
use Illuminate\Testing\TestResponse;

trait WithBasicAssertionsTrait
{
    use WithRouteExistsAssertion;

    public function failWhenParameterNotSent(string $method, string $endpoint, string $param): void
    {
        $response = $this->json($method, $endpoint);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJsonValidationErrorFor($param);
    }

    public function failWhenParameterIsInvalid(string $method, string $endpoint, string $param, array $invalidValues, array $extraParams = []): void
    {

        foreach ($invalidValues as $invalidValue) {
            $data = array_merge($extraParams, [
                $param => $invalidValue,
            ]);

            $response = $this->json($method, $endpoint, $data);

            $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

            $response->assertJsonValidationErrorFor($param);
        }

    }

    public function missingErrorWithValidParameter(string $method, string $endpoint, string $param, array $validValues, array $extraParams = []): void
    {
        foreach ($validValues as $validValue) {
            $data = array_merge($extraParams, [
                $param => $validValue,
            ]);

            $response = $this->json($method, $endpoint, $data);

            $response->assertJsonMissingValidationErrors($param);
        }
    }

    public function assertJsonHasCode(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'code',
        ]);
    }

    public function assertJsonHasMessage(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'message',
        ]);
    }

    public function assertJsonHasData(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'data',
        ]);
    }

    public function assertJsonHasMeta(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'meta',
        ]);
    }

    public function assertJsonHasErrors(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'errors',
        ]);
    }

    public function assertJsonCodeEquals(TestResponse $response, string $desiredCode): void
    {
        $this->assertEquals($response->json('code'), $desiredCode);
    }

    public function assertJsonHasPagination(TestResponse $response): void
    {
        $response->assertJsonStructure([
            'meta' => [
                'pagination' => [
                    "current_page",
                    "from",
                    "last_page",
                    "per_page",
                    "to",
                    "total"
                ]
            ],
        ]);
    }

}
