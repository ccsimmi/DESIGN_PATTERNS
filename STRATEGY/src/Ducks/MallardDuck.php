<?php

namespace App\Ducks;

use App\Behaviours\CanFly;
use App\Behaviours\CanQuack;
use App\Duck;

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new CanFly(), new CanQuack());
    }

    public function getDuckName(): string
    {
        return 'Mallard duck';
    }

    public function describeDuck(): string
    {
        return 'A dabbling duck with a silk-green coloured head.';
    }
}