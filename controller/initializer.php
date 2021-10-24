<?php
require_once File::build_path(array("model", "modelIngredient.php"));
require_once File::build_path(array("model", "modelRecette.php"));

class Initializer {
    protected static $object = "Ingredient";
    protected static $object2 = "Recette";

    public static function init() {
//        $object = "Ingredient";
        $view1 = 'list';
//        $object2 = "Recette";
        $view2 = 'listREC';
        $pagetitle = 'Liste des Ingrédients';
        $tab_i = ModelIngredient::selectAll();
        $tab_r = ModelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}