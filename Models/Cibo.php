<?php
class Cibo extends Prodotti
{
    //PROPRIETA'
    private $ingredients;
    private $weight;

    function __construct($image, $title, $category, $price, $ingredients, $weight)
    {
        parent::__construct($image, $title, $category, $price);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }
}
