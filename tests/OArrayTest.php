<?php
namespace PhpSimple\OArray\Tests;

use PhpSimple\OArray\OArray;
use PHPUnit_Framework_TestCase;

/**
 * Class OArrayTest
 *
 * @coversDefaultClass PhpSimple\OArray\OArray
 */
class OArrayTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::getData
     */
    public function testOArrayCanGetData()
    {
        $oArray = new OArray(['item1', 'item2']);
        $data = $oArray->getData();
        $this->assertInternalType('array', $data);
    }

    /**
     * @covers ::isEmpty
     */
    public function testOArrayCanCheckIfIsEmpty()
    {
        $oArray = new OArray([]);
        $isEmpty = $oArray->isEmpty();
        $this->assertTrue($isEmpty);

        $oArray = new OArray(['item1', 'item2']);
        $isEmpty = $oArray->isEmpty();
        $this->assertFalse($isEmpty);
    }

    /**
     * @covers ::toJson
     */
    public function testOArrayCanRunToJson()
    {
        $oArray = new OArray(['item1', 'item2']);
        $jsonForm = $oArray->toJson();
        $data = json_decode($jsonForm);
        $this->assertInternalType('string', $jsonForm);
        $this->assertInternalType('array', $data);
    }

    /**
     * @covers ::merge
     */
    public function testOArrayCanMerge()
    {
        $oArray = new OArray(['item1', 'item2']);
        $oArrayToMerge = new OArray(['item3', 'item4']);
        $oArray->merge($oArrayToMerge);
        $data = $oArray->getData();
        $this->assertInstanceOf(OArray::class, $oArray);
        $this->assertCount(4, $data);
        $this->assertEquals('item1', $data[0]);
        $this->assertEquals('item2', $data[1]);
        $this->assertEquals('item3', $data[2]);
        $this->assertEquals('item4', $data[3]);
    }
}
