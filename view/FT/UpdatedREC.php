<?php
$rLibelle_REC_HTML = htmlspecialchars($rLibelle_REC);
echo "<p> Fiche technique '$rLibelle_REC_HTML' modifiée !</p>";
require File::build_path(array("view","FT","listREC.php")); //Je sais pas si "FT" c'est correct
?>