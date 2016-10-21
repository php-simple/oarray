<?php
namespace PhpSimple\OArray;

/**
 * Class OArray
 *
 * @package PhpSimple\OArray
 */
class OArray
{
    /**
     * @var array
     */
    private $data;

    /**
     * OArray constructor.
     *
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        $this->data = $array;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return (empty($this->data));
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->data);
    }

    /**
     * @param OArray $oArray
     */
    public function merge(OArray $oArray)
    {
        $this->data = array_merge($this->data, $oArray->getData());
    }
}
