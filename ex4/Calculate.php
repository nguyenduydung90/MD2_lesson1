<?php


class Calculate
{
public $x;
public $y;
public function __construct($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}

    public function plus()
    {
     return $this->x+$this->y;   
}

    public function subtraction()
    {
     return $this->x-$this->y;   
}

 public function multiplication()
    {
     return $this->x*$this->y;
}

 public function division()
    {
        return $this->x/$this->y;
}
}