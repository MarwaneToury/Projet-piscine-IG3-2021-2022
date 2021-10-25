<?php
require_once File::build_path(array("model", "modelIngredient.php"));
require_once File::build_path(array("model", "modelTva.php"));
require_once File::build_path(array("model", "modelUnite.php"));
require_once File::build_path(array("model", "modelCategorieIngredient.php"));

class ControllerIngredient
{
//    protected static $object = "Ingredient"; //à suppr ?

    public static function readall()
    {
//        $object = "Ingredient";
        $view1 = 'list';
        $pagetitle = 'Liste des Ingrédients';
        $tab_i = ModelIngredient::selectAll();
        $tab_LibI = ModelIngredient::selectAllLib();
        require File::build_path(array("view", "view.php"));
    }

    public static function create() // pour créer un ingrédient on envoie les infos des FKs
    {
        $pagetitle = 'Création de l\'ingrédient';
        $view1 = 'create';
        $tab_TVA = ModelTva::selectAll(); // On récupère toutes les TVA existantes dans la table
        $tab_UNI = ModelUnite::selectAll(); // Pareil pour les unités
        $action1 = "created";
        require File::build_path(array("view", "view.php"));
    }

    public static function created() // ingrédient créée avec succès
    {
        ModelIngredient::save($_POST); // On call save du model pour créer la ligne dans la table Ingredient
        $pagetitle = 'Ingrédient créée';
        $view1 = 'created';
        require File::build_path(array("view", "view.php"));
    }

    public static function update()
    {
        $pagetitle = 'Modification de l\'ingrédient';
        $view1 = 'update';
        $iToUpdate = ModelIngredient::select($_GET['code_ing']);
        $iCode_ING = $iToUpdate->getCodeING();
        $iLibelle_ING = $iToUpdate->getLibelleING();
        $iLibelle_CAT = $iToUpdate->getLibelleCAT();
        $tab_CAT = ModelCategorieIngredient::selectAll();
        $iCode_CAT = $iToUpdate->getCodeCAT();
        $iPrix_ING = $iToUpdate->getPrixING();
//        $iEstAllergene_ING = $iToUpdate->getEstAllergeneING();
        $iCode_TVA = $iToUpdate->getCodeTVA();
        if ($iToUpdate->getEstAllergeneING() == 0) $strAllergene = "Non"; else $strAllergene = "Oui";
        $iEstAllergene_ING = $strAllergene;
        $iQuantiteStock_ING = $iToUpdate->getQuantiteStockING();
        $iCode_UNI = $iToUpdate->getCodeUNI();
        $iLibelle_UNI = $iToUpdate->getLibelleUNI();
        $iValeur_TVA = $iToUpdate->getValeurTVA();
        $tab_TVA = ModelTva::selectAll();
        $tab_UNI = ModelUnite::selectAll();
        $action1 = "updated";
        require File::build_path(array("view", "Ingredient", "$view1.php"));
    }

    public static function updated()
    {
        ModelIngredient::update($_POST);
        $iLibelle_ING = $_POST['Libelle_ING'];
        $pagetitle = 'Ingrédient modifié';
        $view1 = 'updated';
        $tab_i = ModelIngredient::selectAll();
        require File::build_path(array("view", "Ingredient", "$view1.php"));
    }
}

?>