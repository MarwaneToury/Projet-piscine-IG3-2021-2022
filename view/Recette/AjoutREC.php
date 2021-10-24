<h3> Création recette </h3>
<?php
$rProgression_REC = null;
$rLibelle_REC = null;
$rChargesSup_REC = null;
$rCoutPersonnel_REC = null;
$rAssaisonement_REC = null;
$rCoeffCout_REC = null;
$rCout_REC = null;
$rNom_AUT = null;
$rLibelle_CAT2 = null;
$controller2 = 'Recette';
$action2 = 'created';
echo "
<h2> Formulaire create fiche technique </h2>
<form method='post' action='index.php?controller2=$controller2&action2=$action2'>
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
			<select name='Code_AUT'>";
                foreach ($tab_AUT as $aut)
                {
                    $tvaNom_AUT_HTML = htmlspecialchars($aut->getNom_AUT());
                    $tvaNom_AUT_URL = rawurlencode($aut->getNom_AUT());
                    $tvaCode_AUT = rawurlencode($aut->getCode_AUT());
                    echo "<option value='$tvaCode_AUT'>$tvaNom_AUT_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<label for='Libelle_CAT2_id'>Libellé de la catégorie</label> :
			<!--<input type='text' placeholder='Ex : Viande' value='$rLibelle_CAT2' name='Libelle_CAT2' required/>-->
			<select name='Code_CAT2'>";
                foreach ($tab_CAT2 as $cat2)
                {
                    $tvaLibelle_CAT2_HTML = htmlspecialchars($cat2->getLibelle_CAT2());
                    $tvaLibelle_CAT2_URL = rawurlencode($cat2->getLibelle_CAT2());
                    $tvaCode_CAT2_URL = rawurlencode($cat2->getCode_CAT2());
                    echo "<option value='$tvaCode_CAT2_URL'>$tvaLibelle_CAT2_HTML</option>";
                }
echo       "</select>
		</p>
	    <p>
    	    <input type='submit' value='Envoyer' />
        </p>
    </fieldset>
</form>";
?>