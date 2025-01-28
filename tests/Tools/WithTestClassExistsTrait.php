<?php

namespace Tests\Tools;

trait WithTestClassExistsTrait
{
    public function test_class_exists()
    {
        $sut = $this->sut();
        $this->assertTrue(
            class_exists($this->sut()),
            "The class '{$sut}' not exists."
        );
    }
}
