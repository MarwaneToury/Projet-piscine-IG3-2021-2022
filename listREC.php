<h2> Liste des recettes existantes </h2>
<?php
foreach ($tab_r as $r) { //TODO: ajouter les créateurs aussi des Recettes
    $libelle_REC_URL = rawurlencode($r->getLibelle_REC());
    $libelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    echo "
    <p>
        Fiche technique de libellé
        <a href='index.php?action=read&libelle=$libelle_REC_URL'>
            $libelle_REC_HTML
        </a>
    </p>";
