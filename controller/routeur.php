<?php
require_once File::build_path(array("controller", "controllerIngredient.php"));

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "readall";
/*
if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "readall";
 */

//TODO
$_GET['controller'] = 'Controller' . ucfirst(isset($_GET['controller'])
        ? $_GET["controller"] : 'Ingredient'); // Ordre de privilège : $_GET['controller'] Sinon $_COOKIE['preference'] Sinon 'Voiture'
/*
$_GET['controller'] = 'controller' . ucfirst(isset($_GET['controller'])
        ? $_GET["controller"] : (isset($_COOKIE['preference'])
        ? $_COOKIE['preference'] : 'Voiture')); // Ordre de privilège : $_GET['controller'] Sinon $_COOKIE['preference'] Sinon 'Voiture'
*/

//$_GET['controller']::{$_GET['action']}();
if (class_exists($_GET['controller']) && in_array($action, get_class_methods($_GET['controller'])))
    $_GET['controller']::$action();
else
    echo "Error, invalid action $action";
?>