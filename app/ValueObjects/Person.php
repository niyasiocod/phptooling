<?php

namespace App\ValueObjects;

class Person
{
    /**
     * Create a new Person instance.
     */
    public function __construct(protected string $name)
    {
        //
    }

    /**
     * Get the person's name.
     */
    public function getName(): string
    {
        return $this->name;
    }
}
