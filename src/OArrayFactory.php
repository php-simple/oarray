<?php
namespace PhpSimple\OArray;

/**
 * Class OArrayFactory
 *
 * @package PhpSimple\OArray
 */
class OArrayFactory
{
    /**
     * @param array $array
     *
     * @return OArray
     */
    public static function create(array $array = [])
    {
        return new OArray($array);
    }
}
