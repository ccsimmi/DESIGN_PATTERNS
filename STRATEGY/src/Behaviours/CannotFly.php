<?php

namespace App\Behaviours;

use App\FlyBehaviour;

class CannotFly implements FlyBehaviour
{
    public function fly(): string
    {
        return 'cannot fly.';
    }
}