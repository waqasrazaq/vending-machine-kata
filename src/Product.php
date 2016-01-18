<?php

/**
 * This file is part of the MiWay Insurance Application project.
 *
 * @author      MiWay Development Team
 * @copyright   Copyright (c) 2016 MiWay Insurance Ltd
 */
abstract class Product
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}