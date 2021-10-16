<?php
require_once File::build_path(array("model", "model.php"));

//require_once "model.php";

class ModelIngredient extends model
{
    private $Code_ING;
    private $Libelle_ING;
    private $Prix_ING;
    private $EstAllergene_ING;
    private $QuantiteStock_ING;
    private $Code_UNI; //FK
    private $Code_TVA; //FK
    private $Code_CAT; //FK
    protected static $object = "Ingredient";
    protected static $primary = 'Code_ING';

    public function getCode_ING()
    {
        return $this->Code_ING;
    }

    public function getLibelleING()
    {
        return $this->Libelle_ING;
    }

    public function getPrixING()
    {
        return $this->Prix_ING;
    }

    public function getEstAllergeneING()
    {
        return $this->EstAllergene_ING;
    }

    public function getQuantiteStockING()
    {
        return $this->QuantiteStock_ING;
    }

    public function getCodeUNI()
    {
        return $this->Code_UNI;
    }

    public function getCodeTVA()
    {
        return $this->Code_TVA;
    }

    public function getCodeCAT()
    {
        return $this->Code_CAT;
    }


    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_ING = $data[0];
            $this->Libelle_ING = $data[1];
            $this->Prix_ING = $data[2];
            $this->EstAllergene_ING = $data[3];
            $this->QuantiteStock_ING = $data[4];
            $this->Code_UNI = $data[5];
            $this->Code_TVA = $data[6];
            $this->Code_CAT = $data[7];
        }
    }
}

?>