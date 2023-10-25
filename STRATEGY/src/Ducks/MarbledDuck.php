<?php

namespace App\Ducks;

use App\Behaviours\CanFly;
use App\Duck;

class MarbledDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new CanFly());
    }

    public function getDuckName(): string
    {
        return 'Marbled duck';
    }

    public function describeDuck(): string
    {
        return 'Adults are a pale sandy-brown colour with blotches of white. Females are smaller than males on average.';
    }
}
