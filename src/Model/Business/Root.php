<?php


namespace Model\Business;


abstract class Root implements \JsonSerializable, IBusinessClass
{

    /**
     * Root constructor.
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $val)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($val);
            }
        }
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }

    public static function JsonParse(string $json, string $class)
    {
        return new $class(json_decode($json, true));
    }
}