<?php   //CLASSE PRINCIPALE
class Prodotti
{
    //AGGIUNGO PROPRIETA'
    protected $title;
    protected $image;
    protected $price;
    protected $category;

    //METODI
    function __construct($title, $image, $price, $category)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }
}
