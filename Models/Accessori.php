<?php
class Accessori extends Prodotti
{
    //PROPRIETA'
    private $materials;
    private $sizes;

    function __construct($image, $title, $category, $price, $materials, $sizes)
    {
        parent::__construct($image, $title, $category, $price);
        $this->materials = $materials;
        $this->sizes = $sizes;
    }
}
