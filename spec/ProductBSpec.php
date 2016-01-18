<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductBSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ProductB');
    }
}
