<?php

class someClass
{
    private $someProp;

    public function __construct($param)
    {
        $this->someProp = $param;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}


$someObject = new someClass('foif');

echo $someObject->someProp;