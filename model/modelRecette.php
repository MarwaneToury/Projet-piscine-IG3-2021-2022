<?php 
require_once "model.php";

class ModelRecette extends model
{
    private $Code_REC;
    private $Cout_REC;
    private $CoeffCout_REC;
    private $Assaisonement_REC;
    private $CoutPersonnel_REC;
    private $ChargesSup_REC;
    private $Libelle_REC;
    private $Progression_REC;
    private $Code_CAT2;
    private $Libelle_CAT2;
    private $Code_AUT;
    private $Nom_AUT;
    protected static $object = "Recette";
    protected static $primary = "Code_REC";

    public function getCode_REC()
    {
        return $this->Code_REC;
    }

    public function getCout_REC()
    {
        return $this->Cout_REC;
    }

    public function getCoeffCout_REC()
    {
        return $this->CoeffCout_REC;
    }

    public function getAssaisonement_REC()
    {
        return $this->Assaisonement_REC;
    }

    public function getCoutPersonnel_REC()
    {
        return $this->CoutPersonnel_REC;
    }

    public function getChargesSup_REC()
    {
        return $this->ChargesSup_REC;
    }

    public function getLibelle_REC()
    {
        return $this->Libelle_REC;
    }

    public function getProgression_REC()
    {
        return $this->Progression_REC;
    }

    public function getCode_CAT2()
    {
        return $this->Code_CAT2;
    }

    public function getLibelle_CAT2()
    {
        return $this->Libelle_CAT2;
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
            $this->Code_REC = $data[0];
            $this->Cout_REC = $data[1];
            $this->CoeffCout_REC = $data[2];
            $this->Assaisonement_REC = $data[3];
            $this->CoutPersonnel_REC = $data[4];
            $this->ChargesSup_REC = $data[5];
            $this->Libelle_REC = $data[6];
            $this->Progression_REC = $data[7];
            $this->Code_CAT2 = $data[8];
            $this->Code_AUT = $data[9];
            $this->Nom_AUT = $data[11];
            $this->Libelle_CAT2 = $data[13];
        }
    }

    public static function selectAll()
    {
        $class_name = 'Model' . ucfirst(static::$object);

        $rep = Model::$pdo->query("SELECT * FROM Recette r JOIN Auteur a ON r.Code_AUT=a.Code_AUT
                        JOIN Categorie c on r.Code_CAT2=c.Code_CAT2
                        ORDER BY c.Libelle_CAT2, r.Libelle_REC ASC;");
        $rep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        return $rep->fetchAll();
    }
}

?>