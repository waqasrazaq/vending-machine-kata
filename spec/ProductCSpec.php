<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductCSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ProductC');
    }
}
