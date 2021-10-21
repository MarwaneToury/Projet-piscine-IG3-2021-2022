<?php
$iLibelle_ING = htmlspecialchars($iLibelle_ING);
$iLibelle_CAT = htmlspecialchars($iLibelle_CAT);
$iPrix_ING = htmlspecialchars($iPrix_ING);
$iEstAllergene_ING = htmlspecialchars($iEstAllergene_ING);
$iQuantiteStock_ING = htmlspecialchars($iQuantiteStock_ING);
$iLibelle_UNI = htmlspecialchars($iLibelle_UNI);
$iValeur_TVA = htmlspecialchars($iValeur_TVA);
$controller = static::$object;

var_dump($tab_TVA);
function printAllTVAValues()
{
    foreach ($tab_TVA as $tva)
    {
        $tvaValeur_TVA_HTML = htmlspecialchars($tva->getValeur_TVA());
        $tvaValeur_TVA_URL = rawurlencode($tva->getValeur_TVA());
        echo "<option value='$tvaValeur_TVA_URL'>$tvaValeur_TVA_HTML</option>";
    }
}
//TODO Lexay: changer le selected des différents select/options
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
			<label for='Prix_ING_id'>Prix</label> :
			<input type='text' placeholder='Ex : Noir' value='$iPrix_ING' name='Prix_ING' required/>
		</p>
		<p>
			<label for='EstAllergene_ING_id'>Est Allergène</label> :
			<!--<input type='text' placeholder='Ex : Noir' value='$iEstAllergene_ING' name='EstAllergene_ING' required/>-->
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
			<!--<input type='text' placeholder='Ex : Noir' value='$iLibelle_UNI' name='Libelle_UNI' required/>-->
			<select name='Libelle_UNI'>";
                foreach ($tab_UNI as $uni)
                {
                    $tvaLibelle_UNI_HTML = htmlspecialchars($uni->getLibelle_UNI());
                    $tvaLibelle_UNI_URL = rawurlencode($uni->getLibelle_UNI());
                    echo "<option value='$tvaLibelle_UNI_URL'>$tvaLibelle_UNI_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<label for='Valeur_TVA_id'>TVA</label> :
			<!--<input type='text' placeholder='Ex : Noir' value='$iValeur_TVA' name='Valeur_TVA' required/>-->
			<select name='Valeur_TVA'>";
                foreach ($tab_TVA as $tva)
                {
                    $tvaValeur_TVA_HTML = htmlspecialchars($tva->getValeur_TVA());
                    $tvaValeur_TVA_URL = rawurlencode($tva->getValeur_TVA());
                    echo "<option value='$tvaValeur_TVA_URL'>$tvaValeur_TVA_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>";
?>