<?php
$rLibelle_REC = htmlspecialchars($rLibelle_REC);
$rCout_REC = htmlspecialchars($rCout_REC);
$rCoeffCout_REC = htmlspecialchars($rCoeffCout_REC);
$rAssaisonement_REC = htmlspecialchars($rAssaisonement_REC);
$rChargesSup_REC; = htmlspecialchars($rChargesSup_REC;);
$rCoutPersonnel_REC = htmlspecialchars($rCoutPersonnel_REC);
$rProgression_REC; = htmlspecialchars($rProgression_REC;);
$rLibelle_CAT2; = htmlspecialchars($rLibelle_CAT2);
$rNom_AUT; = htmlspecialchars($rNom_AUT;);
$controller = static::$object;
echo "
<h2> Formulaire pour fiche technique </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
	<fieldset>
		<legend>Mon formulaire :</legend>
		<p>
			<label for='Libelle_REC_id'>Libellé</label> :
			<input type='text' placeholder='Ex : Lasagnes' value='$rLibelle_REC' name='Libelle_REC' required/>
		</p>
		<p>
			<label for='Libelle_CAT2_id'>Ingrédients dans la recette</label> :
			<input type='text' value='$rLibelle_CAT2' name='Libelle_CAT2' required/>
		</p>
		<p>
			<label for='rCout_REC_id'>Coût de la recette</label> :
			<input type='text' value='$rCout_REC' name='Cout_REC' required/>
		</p>
		<p>
			<label for='CoeffCout_REC_id'>Coefficient du coût de la recette</label> :
			<input type='text' value='$rCoeffCout_REC' name='CoeffCout_REC' required/>
		</p>
		<p>
			<label for='Assaisonement_REC_id'>Assaisonement de la recette</label> :
			<input type='text' value='$rAssaisonement_REC' name='Assaisonement_REC' required/>
		</p>
		<p>
			<label for='ChargesSup_REC_id'>Charges supplémentaires de la recette</label> :
			<input type='text' value='$rChargesSup_REC' name='ChargesSup_REC' required/>
		</p>
		<p>
			<label for='CoutPersonnel_REC_id'>Coût du personnel</label> :
			<input type='text' value='$rCoutPersonnel_REC' name='CoutPersonnel_REC' required/>
		</p>
		<p>
        	<label for='Progression_REC_id'>Progression</label> :
        	<input type='text' value='$rProgression_REC' name='Progression_REC' required/>
        </p>
        <p>
        	<label for='Nom_AUT_id'>Auteur de la recette</label> :
        	<input type='text' value='$rNom_AUT' name='Nom_AUT' required/>
        </p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset>
</form>"
?>