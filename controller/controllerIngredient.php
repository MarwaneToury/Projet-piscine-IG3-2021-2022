<?php
require_once File::build_path(array("model", "modelIngredient.php"));

class ControllerIngredient {
    protected static $object = "Ingredient";

    public static function readall() {
        $view='list';
        $pagetitle='Liste des Ingrédients';
        $tab_i = ModelIngredient::selectAll();
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
        $action = "updated";
        require File::build_path(array("view", "view.php"));
    }

    public static function updated()
    {
        ModelIngredient::update($_POST);
        $immat = $_POST['immatriculation'];
        $pagetitle = 'Résultat';
        $view = 'updated';
        $tab_v = ModelVoiture::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}
?>