<h2> Liste des recettes existantes </h2>
<?php
foreach ($tab_r as $r) {
    $rCode_REC_URL = rawurlencode($r->getCode_REC());
    $rCode_REC_HTML = htmlspecialchars($r->getCode_REC());
    echo "
    <p>
        Fiche technique de code
        <a href='index.php?action=read&immatriculation=$rCode_REC_URL'>
            $rcode_REC_HTML
        </a>
    </p>";
