<h2> Liste des recettes existantes </h2>
<?php
foreach ($tab_r as $r) { //TODO: Check si je fais pas de la merde
    $libelle_REC_URL = rawurlencode($r->getLibelle_REC());
    $Code_AUT_URL = rawurlencode($r->getCode_AUT());
    $libelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $Code_AUT_HTML = htmlspecialchars($r->getCode_AUT());
    echo "
    <p>
        Fiche technique de libellé
        <a href='index.php?action=read&libelle=$libelle_REC_URL'>
            $libelle_REC_HTML
        </a>
    </p>";
    echo "
        <p>
            Fiche technique d'auteur
            <a href='index.php?action=read&AUT=$Code_AUT_URL'>
                $Code_AUT_HTML
            </a>
        </p>";
?>