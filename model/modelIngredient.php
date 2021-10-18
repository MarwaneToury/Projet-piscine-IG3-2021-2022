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
    private $Libelle_UNI;
    private $Code_TVA; //FK
    private $Valeur_TVA;
    private $Code_CAT; //FK
    private $Libelle_CAT;
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

    public function getLibelleUNI()
    {
        return $this->Libelle_UNI;
    }

    public function getValeurTVA()
    {
        return $this->Valeur_TVA;
    }

    public function getLibelleCAT()
    {
        return $this->Libelle_CAT;
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
            $this->Libelle_UNI = $data[12];
            $this->Code_TVA = $data[6];
            $this->Valeur_TVA = $data[9];
            $this->Code_CAT = $data[7];
            $this->Libelle_CAT = $data[14];
        }
    }

    public static function selectAll()
    {
        $class_name = 'Model' . ucfirst(static::$object);

        $rep = Model::$pdo->query("SELECT * FROM Ingredient i JOIN Tva t ON i.Code_TVA=t.Code_TVA
                JOIN Unite u on u.Code_UNI=i.Code_UNI
                JOIN CategorieIngredient c on c.Code_CAT=i.Code_CAT
                ORDER BY c.Libelle_CAT, i.Libelle_ING ASC;");
        $rep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        return $rep->fetchAll();
    }
}

?>