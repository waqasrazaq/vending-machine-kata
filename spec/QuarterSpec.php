<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class QuarterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Quarter');
    }
}
