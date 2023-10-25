<?php

namespace App\Behaviours;

use App\QuackBehaviour;

class CannotQuack implements QuackBehaviour
{
    public function quack(): string
    {
        return 'Cannot quack. More like a squeak.';
    }
}