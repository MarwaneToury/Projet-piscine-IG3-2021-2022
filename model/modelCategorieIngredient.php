<?php 
require_once "model.php";

class ModelCategorieIngredient extends model
{
    private $Code_CAT;
    private $Libelle_CAT;
    protected static $object = "CategorieIngredient";
    protected static $primary = "Code_CAT";

    public function getCode_CAT()
    {
        return $this->Code_CAT;
    }

    public function getLibelle_CAT()
    {
        return $this->Libelle_CAT;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_CAT = $data[0];
            $this->Libelle_CAT= $data[1];
        }
    }
}

?>