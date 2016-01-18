<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DollarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dollar');
    }
}
