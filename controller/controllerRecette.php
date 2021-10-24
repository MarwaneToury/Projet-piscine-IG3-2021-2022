<?php
require_once File::build_path(array("model", "modelIngredient.php"));
require_once File::build_path(array("model", "modelAuteur.php"));
require_once File::build_path(array("model", "modelCategorie.php"));

class ControllerREC {
    protected static $object = "Recette";

    public static function readall() {
        $view2='listREC';
        $pagetitle='Liste des fiches techniques existantes';
        $tab_r = ModelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
   public static function create()
       {
           $pagetitle = 'Création recette';
           $view2 = 'AjoutREC';
           $tab_AUT = ModelAuteur::selectAll();
           $tab_CAT2 = ModelCategorie::selectAll();
           $action = "CreatedREC";
           require File::build_path(array("view", "view.php"));
       }
   public static function created()
    {
        ModelRecette::save($_POST);
        $pagetitle = 'Fiche technique créée';
        $view2 = 'CreatedREC';
        require File::build_path(array("view", "view.php"));
    }
    public static function update()
    { //Pas fini encore
        $pagetitle = 'Modification de la fiche technique';
        $view2 = 'UpdateREC';
        $rToUpdate = ModelRecette::select($_GET['code_rec']);
        $rCode_REC = $rToUpdate->getCode_REC();
        $rLibelle_REC = $rToUpdate->getLibelle_REC();
        $rLibelle_CAT2 = $iToUpdate->getLibelleCAT();
        $tab_CAT2 = ModelCategorie::selectAll();
        $tab_AUT = ModelAuteur::selectAll();
        $rCode_CAT2 = $rToUpdate->getCodeCAT();
        $rCode_AUT = $rToUpdate->getCode_AUT();
        $rNom_AUT = $rToUpdate->getNom_AUT();
        $tab_CAT2 = ModelTva::selectAll();
        $tab_AUT = ModelUnite::selectAll();
        $action = "updated";
        require File::build_path(array("view", "view.php"));
    }
    public static function updated()
    {
        ModelRecette::update($_POST);
        $rLibelle_REC = $_POST['Libelle_REC'];
        $pagetitle = 'Fiche technique modifiée';
        $view2 = 'UpdateREC';
        $tab_r = ModelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}
?>