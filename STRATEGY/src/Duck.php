<?php

namespace App;

use App\FlyBehaviour;

abstract class Duck
{
    private FlyBehaviour $flyBehaviour;

    public function __construct(FlyBehaviour $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function performFly(): string
    {
        return $this->flyBehaviour->fly();
    }

    abstract function getDuckName(): string;

    abstract function describeDuck(): string;
}