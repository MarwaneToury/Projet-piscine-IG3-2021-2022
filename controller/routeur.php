<?php
require_once File::build_path(array("controller", "controllerING"));

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "readall";

if (class_exists($_GET['controller']) && in_array($_GET["action"], get_class_methods($_GET['controller'])))
    $_GET['controller']::{$_GET['action']}();
else
    echo "Error, invalid action";
?>