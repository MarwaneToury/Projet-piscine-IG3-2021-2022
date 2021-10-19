<?php
$immat = htmlspecialchars($immat);
echo "<p> Ingrédient $immat créée !</p>";
require File::build_path(array("view","Ingredient","list.php"));
?>