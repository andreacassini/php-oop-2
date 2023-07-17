<?php
class Accessori extends Prodotti
{
    //PROPRIETA'
    public $materials;
    private $sizes;

    function __construct(String $image, String $title, String $category, String $materials)
    {
        parent::__construct($image, $title, $category);
        $this->materials = $materials;
        $this->sizes = "ND";
    }

    public function setSizes(String $sizes)
    {

        if ($sizes === "") {

            $this->sizes = "ND";
        } else {
            $this->sizes = $sizes;
        }
    }

    public function getSizes()
    {
        return $this->sizes;
    }
}
