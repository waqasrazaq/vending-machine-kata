<?php

/**
 * Class Dime
 */
class Dime extends Money
{
    /**
     * Dime constructor.
     */
    public function __construct()
    {
        $this->name = 'dime';
        $this->value = 0.1;
    }
}
