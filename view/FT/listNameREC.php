<h2> Liste des recettes existantes </h2>
<?php
echo "
<form method='get' action='index.php'>
    <input type='hidden' name='controller' value='FT'
	<input type='hidden' name='action' value='create'/>
	<button type='submit'>Ajouter une fiche technique</button>
</form>"; // Pas sûre de ce que j'ai mit dans value

$rCode_AUT_URL = rawurlencode($r->getCode_AUT());
$rNom_AUT_URL = htmlspecialchars($tab_i[0]->getNom_AUT()); //Check l'indice dans la table
echo "<h4>$Nom_AUT_URL</h4>";

foreach ($tab_r as $r) {
    if ($r->getCode_AUT() != $rCode_AUT_HTML)
    {
        $rCode_AUT_HTML = htmlspecialchars($i->getCode_AUT());
        $rNom_AUT_HTML = htmlspecialchars($i->getNom_AUT());
        echo "<h4>$rNom_AUT_HTML</h4>";
    }
    $rCode_REC_URL = rawurlencode($r->getCode_REC());
    $rLibelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $rCode_AUT_HTML = htmlspecialchars($r->getCode_AUT());

    echo "
        <p>
            $rLibelle_REC_HTML
            <form method='get' action='index.php'>
    	        <input type='hidden' name='action' value='update'/>
    	        <input type='hidden' name='code_rec' value='$rCode_REC_URL'/>
    	        <button type='submit'>⚙</button>
            </form>
        </p>";
    }
?>