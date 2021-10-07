<?php
require_once File::build_path(array("config", "conf.php"));

//require_once "config/conf.php";

class Model
{
    public static $pdo;

    public static function Init()
    {
        $hostname = Conf::getHostname();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();

        try {
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function selectAll()
    {
        $table_name = static::$object; //$object sera défini selon chaque table (ou sous-modèle)
        $class_name = 'Model' . ucfirst(static::$object);

        $rep = Model::$pdo->query("SELECT * FROM $table_name");
        $rep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        return $rep->fetchAll();
    }

    public static function select($primary_value)
    {
        $table_name = static::$object;
        $class_name = 'Model' . ucfirst(static::$object);
        $primary_key = static::$primary; //$primary = nom de la clé primaire de la table

        $sql = "SELECT * from $table_name WHERE $primary_key=:nom_tag";
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $primary_value,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        $tab = $req_prep->fetchAll();

        if (empty($tab))
            return false;
        return $tab[0];
    }

    //Permet de delete dans une table selon la clé primaire donnée
    public static function delete($primary)
    {
        $table_name = static::$object;
        $primary_key = static::$primary;

        $sql = "DELETE from $table_name WHERE $primary_key=:nom_tag";
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $primary,
        );
        $req_prep->execute($values);
    }

    //TODO: à tester
    public static function update($data)
    {
        $table_name = static::$object;
        $primary_key = static::$primary;
        $set = "";

        foreach ($data as $key => $value) {
            $set = "$set$key=:$key,"; //TODO: isn't it $key=:$value?
        }
        $set = rtrim($set, ",");

        $sql = "UPDATE $table_name 
		SET $set 
		WHERE $primary_key=:$primary_key";
        $req_prep = Model::$pdo->prepare($sql);

        $req_prep->execute($data);
    }

    public static function save($data)
    {
        try {
            $table_name = static::$object;
            $into = "";
            $values = "";

            //TODO: need to check this foreach too
            foreach ($data as $key => $value) {
                $into = "$into$key,";
                $values = "$values:$key,";
            }
            $into = rtrim($into, ",");
            $values = rtrim($values, ",");

            $sql = "INSERT INTO $table_name ($into) VALUES ($values)";
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

Model::Init();
?>