<?php
require_once File::build_path(array("model", "modelRecette.php"));

class ControllerREC {
    protected static $object2 = "Recette";

    public static function readall() {
        $view2 = 'list';
        $pagetitle = 'Liste des fiches techniques existantes'; //TODO: à changer !
        $tab_r = ModelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
    // ça c'est pour la liste en bas à gauche qui montre toutes les Recette
    // TODO : après faudras qu'en en prenne qu'un seul ( celui qui est sélectionné et qu'on recup ses infos )
}
?>