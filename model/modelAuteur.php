<?php 
require_once "model.php";

class ModelAuteur extends model
{
    private $Nom_AUT;
    private $Code_AUT;
    protected static $object = "Auteur";
    protected static $primary = "Code_AUT";

    public function getAuthor() {
        return $this;
    }

    public function getCode_AUT()
    {
        return $this->Code_AUT;
    }

    public function getNom_AUT()
    {
        return $this->Nom_AUT;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_AUT = $data[0];
            $this->Nom_AUT= $data[1];
        }
    }
}

?>