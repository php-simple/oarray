<?php

use PhpSimple\OArray\OArray;

class OArrayTest extends PHPUnit_Framework_TestCase {

    public function testOArrayCanTest()
    {
        $nacho = new OArray;
        $this->assertTrue($nacho->test());
    }
}
