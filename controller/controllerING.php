<?php
require_once File::build_path(array("model", "modelING"));

class ControllerING {
    protected static $object = "Ingredient";

    public static function readall() {
        $view='list';
        $pagetitle='Liste des Ingrédients';
        $tab_i = ModelIngredient::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}