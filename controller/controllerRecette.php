<?php
require_once File::build_path(array("model", "modelRecette.php"));
require_once File::build_path(array("model", "modelAuteur.php"));
require_once File::build_path(array("model", "modelCategorie.php"));

class ControllerRecette
{
//    protected static $object2 = "Recette"; //à suppr ?

    public static function readall()
    {
//        $object2 = "Recette";
        $view2 = 'listREC';
        $pagetitle = 'Liste des fiches techniques existantes'; //TODO: à changer !
        $tab_r = ModelRecette::selectAll();
//        require File::build_path(array("view", "view.php"));
    }

    public static function create()
    {
        $pagetitle = 'Création recette';
        $view2 = 'AjoutREC';
        $tab_AUT = ModelAuteur::selectAll();
        $tab_CAT2 = ModelCategorie::selectAll();
        $action = "CreatedREC";
//        require File::build_path(array("view", "view.php"));
    }

    public static function created()
    {
        ModelRecette::save($_POST);
        $pagetitle = 'Fiche technique créée';
        $view2 = 'CreatedREC';
//        require File::build_path(array("view", "view.php"));
    }

    public static function update()
    { //Pas fini encore
        $pagetitle = 'Modification de la fiche technique';
        $view2 = 'UpdateREC';
        $rToUpdate = ModelRecette::select($_GET['code_rec']);
        $rCode_REC = $rToUpdate->getCode_REC();
        $rLibelle_REC = $rToUpdate->getLibelle_REC();
        $rLibelle_CAT2 = $rToUpdate->getLibelleCAT();
        $rCoeffCout_REC = $rToUpdate->getCoeffCout_REC();
        $rAssaisonement_REC = $rToUpdate->getAssaisonement_REC();
        $rCoutPersonnel_REC = $rToUpdate->getCoutPersonnel_REC();
        $rChargesSup_REC = $rToUpdate->getChargesSup_REC();
        $rProgression_REC = $rToUpdate->getProgression_REC();
        $tab_CAT2 = ModelCategorie::selectAll();
        $tab_AUT = ModelAuteur::selectAll();
        $rCode_CAT2 = $rToUpdate->getCode_CAT();
        $rCode_AUT = $rToUpdate->getCode_AUT();
        $rNom_AUT = $rToUpdate->getNom_AUT();
        $tab_CAT2 = ModelTva::selectAll();
        $tab_AUT = ModelUnite::selectAll();
        $action = "updated";
//        require File::build_path(array("view", "view.php"));
    }

    public static function updated()
    {
        ModelRecette::update($_POST);
        $rLibelle_REC = $_POST['Libelle_REC'];
        $pagetitle = 'Fiche technique modifiée';
        $view2 = 'UpdateREC';
        $tab_r = ModelRecette::selectAll();
//        require File::build_path(array("view", "view.php"));
    }
}

?>