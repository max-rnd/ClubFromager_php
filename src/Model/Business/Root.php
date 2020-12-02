<?php


namespace Model\Business;


abstract class Root
{
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
}