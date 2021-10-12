<?php 
require_once "model.php";

class modelrecette extends model
{
    private Code_REC;
    private Cout_REC;
    private CoeffCout_REC;
    private Assaisonement_REC;
    private CoutPersonnel_REC;
    private ChargesSup_REC;
    private Libelle_REC;
    private Progression_REC;
    private Code_CAT2;
    private Code_AUT;
    protected static $object = "Recette";
    protected static $primary = "Code_REC";

    public function getCode_REC()
    {
        return $this->Code_REC;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_REC = $data[0];
            $this->Cout_REC = $data[1];
            $this->CoeffCout_REC = $data[2];
            $this->Assaisonement_REC = $data[3];
            $this->CoutPersonnel_REC = $data[4];
            $this->ChargesSup_REC = $data[5];
            $this->Libelle_REC = $data[6];
            $this->Progression_REC = $data[7];
            $this->Code_CAT2 = $data[8];
            $this->Code_AUT= $data[9];
        }
    }
}

?>