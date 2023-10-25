<?php

namespace App\Behaviours;

use App\QuackBehaviour;

class CanQuack implements QuackBehaviour
{
    public function quack(): string
    {
        return 'Can quack.';
    }
}
