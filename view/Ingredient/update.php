<?php
$iLibelle_ING = htmlspecialchars($iLibelle_ING);
$iLibelle_CAT = htmlspecialchars($iLibelle_CAT);
$iPrix_ING = htmlspecialchars($iPrix_ING);
$iEstAllergene_ING = htmlspecialchars($iEstAllergene_ING);
$iQuantiteStock_ING = htmlspecialchars($iQuantiteStock_ING);
$iLibelle_UNI = htmlspecialchars($iLibelle_UNI);
$iValeur_TVA = htmlspecialchars($iValeur_TVA);
$controller = static::$object;
echo "
<h2> Formulaire pour ingrédient </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
	<fieldset>
		<legend>Mon formulaire :</legend>
		<p>
			<label for='Libelle_ING_id'>Libellé</label> :
			<input type='text' placeholder='Ex : Banane' value='$iLibelle_ING' name='Libelle_ING' required/>
		</p>
		<p>
			<label for='Libelle_CAT_id'>Catégorie</label> :
			<input type='text' placeholder='Ex : Renault' value='$iLibelle_CAT' name='Libelle_CAT' required/>
		</p>
		<p>
			<label for='Prix_ING_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$iPrix_ING' name='Prix_ING' required/>
		</p>
		<p>
			<label for='Prix_ING_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$iEstAllergene_ING' name='Prix_ING' required/>
		</p>
		<p>
			<label for='Prix_ING_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$iQuantiteStock_ING' name='Prix_ING' required/>
		</p>
		<p>
			<label for='Prix_ING_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$iLibelle_UNI' name='Prix_ING' required/>
		</p>
		<p>
			<label for='Prix_ING_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$iValeur_TVA' name='Prix_ING' required/>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>"
?>