<?php 
require_once "model.php";

class modelUnite extends model
{
    private $Code_UNI;
    private $Libelle_UNI;
    protected static $object = "Unite";
    protected static $primary = "Code_UNI";

    public function getCode_UNI()
    {
        return $this->Code_UNI;
    }

    public function getLibelle_UNI()
    {
        return $this->Libelle_UNI;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_UNI = $data[0];
            $this->Libelle_UNI= $data[1];
        }
    }
}

?>