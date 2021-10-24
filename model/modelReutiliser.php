<?php 
require_once "model.php";

class ModelReutiliser extends model
{
    private $Code_REC;
    private $Code_REC_1;
    protected static $object = "Reutiliser";
    protected static $primary = "Code_REC";

    public function getCode_REC()
    {
        return $this->Code_REC;
    }

    public function getCode_REC_1()
    {
        return $this->Code_REC_1;
    }

    public function __construct($data = NULL)
    {
        if (!is_null($data)) {
            $this->Code_REC = $data[0];
            $this->Code_REC_1= $data[1];
        }
    }

    public static function save($data)
    {
        try {
            $table_name = static::$object;
            $into = "";
            $values = "";

            //TODO: need to check this foreach too
            foreach ($data as $key => $value) {
                if ($key = )
                $into = "$into$key,";
                $values = "$values:$key,";
            }
            $into = rtrim($into, ",");
            $values = rtrim($values, ",");

            $sql = "INSERT INTO Reutiliser ($into) VALUES ($values)";
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->execute($data);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
}

?>