<?php

namespace spec\Rhincodon\Learn;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NachoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rhincodon\Learn\Nacho');
    }
}
