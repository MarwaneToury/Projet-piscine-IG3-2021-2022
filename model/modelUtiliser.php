<?php 
require_once "model.php";

class ModelUtiliser extends model
{
    private $Code_ING;
    private $Code_REC;
    private $QuantiteNecessaire;
    protected static $object = "Utiliser";
    protected static $primary = "Code_ING";
    protected static $primary2 = "Code_REC";

    public function getCode_ING()
    {
        return $this->Code_ING;
    }

    public function getCode_REC()
    {
        return $this->Code_REC;
    }

    public function getQuantiteNecessaire()
    {
        return $this->QuantiteNecessaire;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_ING = $data[0];
            $this->Code_REC= $data[1];
            $this->QuantiteNecessaire = $data[2];
        }
    }
}

?>