<?php
$rLibelle_REC_HTML = htmlspecialchars($rLibelle_REC);
echo "<p> Fiche technique '$rLibelle_REC_HTML' créée !</p>";
require File::build_path(array("view","FT","listREC.php"));
?>