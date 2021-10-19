<?php
$iLibelle_ING_HTML = htmlspecialchars($iLibelle_ING);
echo "<p> Ingrédient \'$iLibelle_ING_HTML\' modifié !</p>";
require File::build_path(array("view","Ingredient","list.php"));
?>