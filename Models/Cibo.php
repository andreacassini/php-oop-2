<?php
class Cibo extends Prodotti
{
    //PROPRIETA'
    private $ingredients;
    private $weight;

    function __construct($image, $title, $category)
    {
        parent::__construct($image, $title, $category);
    }

    public function setIngredients($ingredients)
    {

        if (count($ingredients) === 1) {

            $this->ingredients = $ingredients[0];
        } else {

            $string = "";

            for ($i = 0; $i < count($ingredients); $i++) {

                if ($i === count($ingredients) - 1) {

                    $string .= $ingredients[$i];
                } else {
                    $string .= $ingredients[$i] . ", ";
                }
            }

            $this->ingredients = $string;
        }
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setweight($weight)
    {
        $this->weight = $weight . "g";
    }

    public function getweight()
    {
        return $this->weight;
    }
}
