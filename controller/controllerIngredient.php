<?php
require_once File::build_path(array("model", "modelIngredient.php"));
require_once File::build_path(array("model", "modelTva.php"));
require_once File::build_path(array("model", "modelUnite.php"));

class ControllerIngredient {
    protected static $object = "Ingredient";

    public static function readall() {
        $view='list';
        $pagetitle='Liste des Ingrédients';
        $tab_i = ModelIngredient::selectAll();
        require File::build_path(array("view", "view.php"));
    }

    public static function create() // pour créer un ingrédient 
    {
        $pagetitle = 'Création de l\'ingrédient';
        $view = 'create';
        $iLibelle_ING = $_POST['Libelle_ING'];
        $iLibelle_CAT = $_POST['Libelle_CAT'];
        $iPrix_ING = $_POST['PRIX_ING'];
        $iEstAllergene_ING = $_POST['EstAllergene_ING'];
        $iQuantiteStock_ING = $_POST['QuantiteStock_ING'];
        $iLibelle_UNI = $_POST['Libelle_UNI'];
        $iValeur_TVA = $_POST['Valeur_TVA'];
        $action = "created";
        require File::build_path(array("view", "view.php"));
    }

    public static function created() // ingrédient créée avec succès
    {
        ModelIngredient::create($_POST);
        $iLibelle_ING = $_POST['Libelle_ING'];
        $pagetitle = 'Ingrédient créée';
        $view = 'created';
        require File::build_path(array("view", "view.php"));
    }

    public static function update()
    {
        $pagetitle = 'Modification de l\'ingrédient';
        $view = 'update';
        $iCode_ING = ModelIngredient::select($_GET['code_ing']);
        $iLibelle_ING = $iCode_ING->getLibelleING();
        $iLibelle_CAT = $iCode_ING->getLibelleCAT();
        $iPrix_ING = $iCode_ING->getPrixING();
        $iEstAllergene_ING = $iCode_ING->getEstAllergeneING();
        $iQuantiteStock_ING = $iCode_ING->getQuantiteStockING();
        $iLibelle_UNI = $iCode_ING->getLibelleUNI();
        $iValeur_TVA = $iCode_ING->getValeurTVA();
        $tab_TVA = ModelTva::selectAll();
        $tab_UNI = ModelUnite::selectAll();
        $action = "updated";
        require File::build_path(array("view", "view.php"));
    }

    public static function updated()
    {
        ModelIngredient::update($_POST);
        $iLibelle_ING = $_POST['Libelle_ING'];
        $pagetitle = 'Ingrédient modifié';
        $view = 'updated';
        $tab_v = ModelIngredient::selectAll(); // c'est quoi ça ?
        require File::build_path(array("view", "view.php"));
    }
}
?>