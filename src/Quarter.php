<?php

/**
 * Class Quarter
 */
class Quarter extends Money
{
    /**
     * Quarter constructor.
     */
    public function __construct()
    {
        $this->name = 'quarter';
        $this->value = 0.25;
    }
}
