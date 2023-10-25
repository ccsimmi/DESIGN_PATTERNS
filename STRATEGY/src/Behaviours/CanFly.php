<?php

namespace App\Behaviours;

use App\FlyBehaviour;

class CanFly implements FlyBehaviour
{
    public function fly(): string
    {
        return 'can fly.';
    }
}