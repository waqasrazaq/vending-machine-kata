<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NickelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Nickel');
    }
}
