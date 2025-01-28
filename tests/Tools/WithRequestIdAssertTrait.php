<?php

namespace Tests\Tools;

use Illuminate\Support\Str;

trait WithRequestIdAssertTrait
{
    use WithBasicAssertionsTrait;

    public function testRequestIdValidation()
    {
        $param = 'request_id';
        $invalidValues = ['', -1, 0, 'abcd', null, true, false, 10, '451', 200, 'abc-123'];
        $validValues = [Str::uuid()->toString()];
        $this->failWhenParameterNotSent($this->method(), $this->uri(), $param);
        $this->failWhenParameterIsInvalid($this->method(), $this->uri(), $param, $invalidValues);
        $this->missingErrorWithValidParameter($this->method(), $this->uri(), $param, $validValues);
    }

    public function testRequestIdSentToSomeService(): void
    {
    }
}
