<?php

/**
 * Class Dollar
 */
class Dollar extends Money
{
    /**
     * Dollar constructor.
     */
    public function __construct()
    {
        $this->name = 'dollar';
        $this->value = 1.0;
    }
}
