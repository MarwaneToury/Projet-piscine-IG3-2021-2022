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

    public static function update()
    {
        $pagetitle = 'Modification de l\'ingrédient';
        $view = 'update';
        $iCode_ING = ModelIngredient::select($_GET['code_ing']);
        $iLibelle_ING = $iCode_ING->getLibelleING();
        $iLibelle_CAT = $iCode_ING->getLibelleCAT();
        $iPrix_ING = $iCode_ING->getPrixING();
//        $iEstAllergene_ING = $iCode_ING->getEstAllergeneING();
        $iCode_TVA = $iCode_ING->getCodeTVA();
        if ($iCode_ING->getEstAllergeneING() == 0) $strAllergene="Non"; else $strAllergene="Oui";
        $iEstAllergene_ING = $strAllergene;
        $iQuantiteStock_ING = $iCode_ING->getQuantiteStockING();
        $iCode_UNI = $iCode_ING->getCodeUNI();
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
        $immat = $_POST['immatriculation'];
        $pagetitle = 'Résultat';
        $view = 'updated';
        $tab_v = ModelIngredient::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}
?>