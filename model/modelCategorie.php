<?php 
require_once "model.php";

class modelCategorie extends model
{
    private Code_CAT2;
    private Libelle_CAT2;
    protected static $object = "Categorie";
    protected static $primary = "Code_CAT2";

    public function getCode_CAT2()
    {
        return $this->Code_CAT2;
    }

    public function getLibelle_CAT2()
    {
        return $this->Libelle_CAT2;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_CAT2 = $data[0];
            $this->Libelle_CAT2= $data[1];
        }
    }
}

?>