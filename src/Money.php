<?php

/**
 * This file is part of the MiWay Insurance Application project.
 *
 * @author      MiWay Development Team
 * @copyright   Copyright (c) 2016 MiWay Insurance Ltd
 */
abstract class Money
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}