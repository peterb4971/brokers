<?php

namespace App\Contracts\Builders;

interface ResponseBuilderInterface
{
    public function build($data, int $status, string $code, string $message, $header = [], $meta = []);
}
