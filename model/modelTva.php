<?php 
require_once "model.php";

class ModelTva extends model
{
    private $Code_TVA;
    private $Valeur_TVA;
    protected static $object = "Tva";
    protected static $primary = "Code_TVA";

    public function getCode_TVA()
    {
        return $this->Code_TVA;
    }

    public function getValeur_TVA()
    {
        return $this->Valeur_TVA;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_TVA = $data[0];
            $this->Valeur_TVA= $data[1];
        }
    }
}

?>