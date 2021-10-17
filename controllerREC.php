<?php
require_once File::build_path(array("model", "modelING"));

class controllerREC {
    protected static $object = "Recette";

    public static function readall() {
        $view='listREC';
        $pagetitle='Liste des fiches techniques existantes';
        $tab_r = modelRecette::selectAll();
        require File::build_path(array("view", "view.php"));
    }
}