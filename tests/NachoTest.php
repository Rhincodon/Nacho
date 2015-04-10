<?php

use Rhincodon\Nacho\Nacho;

class NachoTest extends PHPUnit_Framework_TestCase {

    public function testNachoHasCheese()
    {
        $nacho = new Nacho;
        $this->assertTrue($nacho->hasCheese());
    }

}