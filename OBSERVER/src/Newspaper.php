<?php

namespace App;

use SplObserver;

class Newspaper implements \SplSubject
{
    private string $name;
    private array $observers;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach($this->observers as $value) {
            $value->update($this);
        }
    }
}