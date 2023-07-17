<?php
class Giochi extends Prodotti
{
    //PROPRIETA'
    private $features;
    private $sizes;

    function __construct($image, $title, $category, $price, $features, $sizes)
    {
        parent::__construct($image, $title, $category, $price);
        $this->features = $features;
        $this->sizes = $sizes;
    }
}
