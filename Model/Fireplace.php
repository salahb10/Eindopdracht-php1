<?php

class Fireplace
{
    public $FireplaceID;
    private $Model;
    private $Height;
    private $Width;
    private $Price;
    private $Image;


    function __construct($FireplaceID, $Model, $Height, $Width, $Price, $Image)
    {
        $this->FireplaceID= $FireplaceID;
        $this->Model = $Model;
        $this->Height = $Height;
        $this->Width = $Width;
        $this->Price = $Price;
        $this->Image = $Image;

    }

    public function getFireplaceID()
    {
        return $this->FireplaceID;
    }
    public function getModel()
    {
        return $this->Model;
    }
    public function getHeight()
    {
        return $this->Height;
    }
    public function getWidth()
    {
        return $this->Width;
    }
    public function getPrice()
    {
        return $this->Price;
    }
    public function getImage()
    {
        return $this->Image;
    }

 




}
