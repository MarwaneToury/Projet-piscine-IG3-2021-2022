<h2> Liste des recettes existantes avec tous les attributs </h2>
<?php
echo "
<form method='get' action='index.php'>
    <input type='hidden' name='controller2' value='Recette'
	<input type='hidden' name='action2' value='create'/>
	<button type='submit'>Ajouter une fiche technique</button>
</form>"; // Pas sûre de ce que j'ai mit dans value

$rCode_AUT_URL = rawurlencode($tab_r[0]->getCode_AUT());
$rNom_AUT_HTML = htmlspecialchars($tab_r[0]->getNom_AUT()); //Check l'indice dans la table
echo "<h4>$rNom_AUT_HTML</h4>";

foreach ($tab_r as $r)
{ //TODO: Check si je fais pas de la merde là aussi
    if ($r->getCode_AUT() != $rCode_AUT_HTML) {
        $rCode_AUT_HTML = htmlspecialchars($r->getCode_AUT());
        $rNom_AUT_HTML = htmlspecialchars($r->getNom_AUT());
        echo "<h4>$rNom_AUT_HTML</h4>";
    }
    $rLibelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $rCode_REC_URL = rawurlencode($r->getCode_REC());
    $rCode_REC_HTML = htmlspecialchars($r->getCode_REC());
    $rCout_REC_HTML = htmlspecialchars($r->getCout_REC());
    $rCoeffCout_REC_HTML = htmlspecialchars($r->getCoeffCout_REC());
    $rAssaisonement_REC_HTML = htmlspecialchars($r->getAssaisonement_REC());
    $rCoutPersonnel_REC_HTML = htmlspecialchars($r->getCoutPersonnel_REC());
    $rChargesSup_REC_HTML = htmlspecialchars($r->getChargesSup_REC());
    $rProgression_REC_HTML = htmlspecialchars($r->getProgression_REC());
    $rLibelle_CAT2_HTML = htmlspecialchars($r->getLibelle_CAT2());
    echo "
            <p>
                $rLibelle_REC_HTML
                $rCout_REC_HTML
                $rCoeffCout_REC_HTML
                $rAssaisonement_REC_HTML
                $rCoutPersonnel_REC_HTML
                $rChargesSup_REC_HTML
                $rProgression_REC_HTML
                $rLibelle_CAT2_HTML
                <form method='get' action='index.php'>
        	        <input type='hidden' name='action2' value='update'/>
        	        <input type='hidden' name='code_aut' value='$rCode_REC_URL'/>
        	        <button type='submit'>⚙</button>
                </form>
            </p>";
}
?>