<?php   //CLASSE PRINCIPALE
class Prodotti
{
    //AGGIUNGO PROPRIETA'
    public $title;
    public $image;
    public $category;
    protected $price;

    //METODI
    function __construct(String $image, String $title, String $category)
    {
        $this->image = $image;
        $this->title = $title;
        $this->category = $category;
        $this->price = "ND";
    }
    public function setPrice(Float $price)
    {
        $this->price = "€ " . $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
