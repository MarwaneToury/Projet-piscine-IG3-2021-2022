<?php
require_once File::build_path(array("model", "modelIngredient.php"));

class ControllerREC {
    protected static $object = "Recette";

    public static function readall() {
        $view='list';
        $pagetitle='Liste des fiches techniques existantes';
        $tab_r = ModelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
    // ça c'est pour la liste en bas à gauche qui montre toutes les FT
    // TODO : après faudras qu'en en prenne qu'un seul ( celui qui est sélectionné et qu'on recup ses infos )
}
?>