<?php
require_once File::build_path(array("controller", "controllerIngredient.php"));
require_once File::build_path(array("controller", "controllerRecette.php"));
require_once File::build_path(array("controller", "initializer.php"));

if (!isset($_GET['action1'],$_GET['action2'],$_GET['controller1'],$_GET['controller2']))
    Initializer::init();

if (isset($_GET['action1']))
    $action1 = $_GET['action1'];
else
    $action1 = "readall";

if (isset($_GET['action2']))
    $action2 = $_GET['action2'];
else
    $action2 = "readall";

$_GET['controller1'] = 'controller' . ucfirst(isset($_GET['controller1'])
        ? $_GET["controller1"] : 'Ingredient');

$_GET['controller2'] = 'controller' . ucfirst(isset($_GET['controller2'])
        ? $_GET["controller2"] : 'Recette');

if (class_exists($_GET['controller1']) && in_array($action1, get_class_methods($_GET['controller1'])))
    $_GET['controller1']::$action1();
else
    echo "Error, invalid action $action1";

if (class_exists($_GET['controller2']) && in_array($action2, get_class_methods($_GET['controller2'])))
    $_GET['controller2']::$action2();
else
    echo "Error, invalid action $action2";

?>