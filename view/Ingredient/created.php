<?php
$iLibelle_ING_HTML = htmlspecialchars($iLibelle_ING);
echo "<p> Ingrédient \'$iLibelle_ING_HTML\' créé !</p>";
require File::build_path(array("view","Ingredient","list.php"));
?>