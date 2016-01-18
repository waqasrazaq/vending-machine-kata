<?php

/**
 * Class Nickel
 */
class Nickel extends Money
{
    /**
     * Nickel constructor.
     */
    public function __construct()
    {
        $this->name = 'nickel';
        $this->value = 0.05;
    }
}
