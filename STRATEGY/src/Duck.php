<?php

namespace App;

use App\FlyBehaviour;

abstract class Duck
{
    private FlyBehaviour $flyBehaviour;
    private QuackBehaviour $quackBehaviour;

    public function __construct(FlyBehaviour $flyBehaviour, QuackBehaviour $quackBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
        $this->quackBehaviour = $quackBehaviour;
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour): void
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public function performFly(): string
    {
        return $this->flyBehaviour->fly();
    }

    public function performQuack(): string
    {
        return $this->quackBehaviour->quack();
    }

    abstract function getDuckName(): string;

    abstract function describeDuck(): string;
}