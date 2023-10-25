<?php

namespace App\Ducks;

use App\Behaviours\CanFly;
use App\Duck;

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new CanFly());
    }

    public function getDuckName(): string
    {
        return 'Mallard';
    }

    public function describeDuck(): string
    {
        return 'A dabbling duck with a silk-green coloured head.';
    }
}