<?php

namespace App\Ducks;

use App\Behaviours\CannotFly;
use App\Duck;

class RubberDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new CannotFly());
    }

    public function getDuckName(): string
    {
        return 'Rubber duck';
    }

    public function describeDuck(): string
    {
        return 'A staple of many bath tubs world wide, these cute ducks give off a little squeak when squeezed.';
    }
}