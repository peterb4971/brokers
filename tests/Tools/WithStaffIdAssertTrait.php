<?php

namespace Tests\Tools;

trait WithStaffIdAssertTrait
{
    use WithBasicAssertionsTrait;

    public function testUserIdValidation()
    {
        $param = 'staff_id';
        $invalidValues = ['', -1, 0, 'abcd', null, true, false];
        $validValues = [1, 10, 1000, 451, 900, 45123, '29', '10231'];
        $this->failWhenParameterNotSent($this->method(), $this->uri(), $param);
        $this->failWhenParameterIsInvalid($this->method(), $this->uri(), $param, $invalidValues);
        $this->missingErrorWithValidParameter($this->method(), $this->uri(), $param, $validValues);
    }
    public function testFailWhenProvidedUserIdNotExists(): void
    {
    }
}
