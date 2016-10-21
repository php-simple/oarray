<?php
namespace PhpSimple\OArray\Tests;

use PhpSimple\OArray\OArray;
use PhpSimple\OArray\OArrayFactory;
use PHPUnit_Framework_TestCase;

/**
 * Class OArrayFactoryTest
 *
 * @coversDefaultClass PhpSimple\OArray\OArrayFactory
 */
class OArrayFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::create
     */
    public function testOArrayFactoryCanCreateOArray()
    {
        $oArray = OArrayFactory::create([]);
        $this->assertInstanceOf(OArray::class, $oArray);
    }
}
