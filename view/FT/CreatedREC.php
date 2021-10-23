<?php
$iLibelle_REC_HTML = htmlspecialchars($iLibelle_REC);
echo "<p> Fiche technique \'$iLibelle_REC_HTML\' créée !</p>";
require File::build_path(array("view","FT","listREC.php"));
?>