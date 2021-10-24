<h3> Création recette </h3>
<?php
$rProgression_REC = htmlspecialchars($rProgression_REC);
$rLibelle_REC = htmlspecialchars($rLibelle_REC);
$rChargesSup_REC = htmlspecialchars($rChargesSup_REC);
$rCoutPersonnel_REC = htmlspecialchars($rCoutPersonnel_REC);
$rAssaisonement_REC = htmlspecialchars($rAssaisonement_REC);
$rCoeffCout_REC = htmlspecialchars($rCoeffCout_REC);
$rCout_REC = htmlspecialchars($rCout_REC);
$rNom_AUT = htmlspecialchars($rNom_AUT);
$rLibelle_CAT2 = htmlspecialchars($rLibelle_CAT2);
$controller = static::$object;
echo "
<h2> Formulaire create fiche technique </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for='Progression_REC_id'>Progression</label> :
        	<input type='text' placeholder='Ex : Banane' value='$rProgression_REC' name='Progression_REC' required/>
        </p>
        <p>
            <label for='Libelle_REC_id'>Libellé fiche technique</label> :
            <input type='text' placeholder='Ex : Banane' value='$rLibelle_REC' name='Libelle_REC' required/>
        </p>
        <p>
            <label for='ChargesSup_REC_id'>Charges supplémentaires</label> :
            <input type='text' placeholder='Ex : Banane' value='$rChargesSup_REC' name='ChargesSup_REC' required/>
        </p>
        <p>
           <label for='CoutPersonnel_REC_id'>Coût du personnel</label> :
            <input type='text' placeholder='Ex : Banane' value='$rCoutPersonnel_REC' name='CoutPersonnel_REC' required/>
        </p>
        <p>
            <label for='CoeffCout_REC_id'>Coefficient sur le coût</label> :
            <input type='text' placeholder='Ex : Banane' value='$rCoeffCout_REC' name='CoeffCout_REC' required/>
        </p>
        <p>
             <label for='Assaisonement_REC_id'>Assaisonnement</label> :
             <input type='text' placeholder='Ex : Banane' value='$rAssaisonement_REC' name='Assaisonement_REC' required/>
        </p>
        <p>
             <label for='rCout_REC_id'>Coût</label> :
             <input type='text' value='$rCout_REC' name='Cout_REC' required/>
        </p>
       <p>
			<label for='Nom_AUT_id'>Nom de l'auteur</label> :
			<!--<input type='text' placeholder='Ex : Mr A' value='$rNom_AUT' name='Nom_AUT' required/>-->
			<select name='Nom_AUT'>";
                foreach ($tab_AUT as $aut)
                {
                    $tvaNom_AUT_HTML = htmlspecialchars($aut->getNom_AUT());
                    $tvaNom_AUT_URL = rawurlencode($aut->getNom_AUT());
                    echo "<option value='$tvaNom_AUT_URL'>$tvaNom_AUT_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<label for='Libelle_CAT2_id'>Libellé de la catégorie</label> :
			<!--<input type='text' placeholder='Ex : Viande' value='$rLibelle_CAT2' name='Libelle_CAT2' required/>-->
			<select name='Libelle_CAT2'>";
                foreach ($tab_CAT2 as $cat2)
                {
                    $tvaLibelle_CAT2_HTML = htmlspecialchars($aut->getLibelle_CAT2());
                    $tvaLibelle_CAT2_URL = rawurlencode($aut->getLibelle_CAT2());
                    echo "<option value='$tvaLibelle_CAT2_URL'>$tvaLibelle_CAT2_HTML</option>";
                }
echo       "</select>
		</p>
	    <p>
    	    <input type='submit' value='Envoyer' />
        </p>
    </fieldset>
</form>";
?>