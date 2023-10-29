<?php

namespace App\Observers;

class Reader implements \SplObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject): void
    {
        echo '<li>' . $this->name . ' has subscribed to the ' . $subject->getName() . '</li>';
    }
}