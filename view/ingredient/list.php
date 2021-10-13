<h2> Liste des ingrédients </h2>
<?php
foreach ($tab_i as $i) {
    $iCode_ING_URL = rawurlencode($i->getCode_ING());
    $iCode_ING_HTML = htmlspecialchars($i->getCode_ING());
    echo "
    <p>
        Ingrédient de code
        <a href='index.php?action=read&immatriculation=$iCode_ING_URL'>
            $icode_ING_HTML
        </a>
    </p>";
}
//TODO: echo l'ajout d'un ingrédient ?