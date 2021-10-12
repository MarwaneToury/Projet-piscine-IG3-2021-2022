<?php
require_once "model.php";

class ModelIngredient extends model
{
    private $code_ING;
    private $libelle_ING;
    private $prix_ING;
    private $estAllergene_ING;
    private $quantiteStock_ING;
    private $code_UNI; //FK
    private $code_TVA; //FK
    private $code_CAT; //FK
    protected static $object = "Ingredient";
    protected static $primary = 'Code_ING';

    public function getCode_ING()
    {
        return $this->code_ING;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->code_ING = $data[0];
            $this->libelle_ING = $data[1];
            $this->prix_ING = $data[2];
            $this->estAllergene_ING = $data[3];
            $this->quantiteStock_ING = $data[4];
            $this->code_UNI = $data[5];
            $this->code_TVA = $data[6];
            $this->code_CAT = $data[7];
        }
    }
}

?>