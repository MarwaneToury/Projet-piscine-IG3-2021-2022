<h3> Creation ingrédient </h3>
<?php
// TODO : check ( pas fini )
$iLibelle_ING = htmlspecialchars($iLibelle_ING);
$iLibelle_CAT = htmlspecialchars($iLibelle_CAT);
$iPrix_ING = htmlspecialchars($iPrix_ING);
$iEstAllergene_ING = htmlspecialchars($iEstAllergene_ING);
$iQuantiteStock_ING = htmlspecialchars($iQuantiteStock_ING);
$iLibelle_UNI = htmlspecialchars($iLibelle_UNI);
$iValeur_TVA = htmlspecialchars($iValeur_TVA);
$controller = static::$object;
echo "
<h2> Formulaire create ingrédient </h2>
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
			<label for='Prix_ING_id'>Prix</label> :
			<input type='text' placeholder='Ex : Noir' value='$iPrix_ING' name='Prix_ING' required/>
		</p>
		<p>
			<label for='EstAllergene_ING_id'>Est Allergène</label> :
			<input type='text' placeholder='Ex : Noir' value='$iEstAllergene_ING' name='EstAllergene_ING' required/>
			<select name='EstAllergene_ING'>
                <option value='1'>Oui</option>
                <option value='0' selected>Non</option>
            </select>
		</p>
		<p>
			<label for='QuantiteStock_ING_id'>Quantité</label> :
			<input type='text' placeholder='Ex : Noir' value='$iQuantiteStock_ING' name='QuantiteStock_ING' required/>
		</p>
		<p>
			<label for='Libelle_UNI_id'>Unité</label> :
			<input type='text' placeholder='Ex : Noir' value='$iLibelle_UNI' name='Libelle_UNI' required/>
		</p>
		<p>
			<label for='Valeur_TVA_id'>TVA</label> :
			<input type='text' placeholder='Ex : Noir' value='$iValeur_TVA' name='Valeur_TVA' required/>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>"
?>