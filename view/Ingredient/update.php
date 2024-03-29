<?php
$iLibelle_ING = htmlspecialchars($iLibelle_ING);
$iLibelle_CAT = htmlspecialchars($iLibelle_CAT);
$iPrix_ING = htmlspecialchars($iPrix_ING);
$iEstAllergene_ING = htmlspecialchars($iEstAllergene_ING);
$iQuantiteStock_ING = htmlspecialchars($iQuantiteStock_ING);
$iLibelle_UNI = htmlspecialchars($iLibelle_UNI);
$iValeur_TVA = htmlspecialchars($iValeur_TVA);
$iCode_ING_URL = rawurlencode($iCode_ING);
$controller1 = "Ingredient";

echo "
<h2> Formulaire pour ingrédient </h2>
<form id='updateING' method='post' action='index.php?controller1=$controller1&action1=$action1'>
	<fieldset>
		<legend>Mon formulaire :</legend>
		<input type='hidden' name='primary_value' value='$iCode_ING_URL'/>
		<p>
			<label for='Libelle_ING_id'>Libellé</label> :
			<input type='text' placeholder='Ex : Banane' value='$iLibelle_ING' name='Libelle_ING' required/>
		</p>
		<p>
			<label for='Libelle_CAT_id'>Catégorie</label> :
			<select name='Code_CAT'>";
                foreach ($tab_CAT as $cat)
                {
                    $tvaLibelle_CAT_HTML = htmlspecialchars($cat->getLibelle_CAT());
                    $tvaCode_CAT_URL = rawurlencode($cat->getCode_CAT());
                    if ($cat->getCode_CAT()==$iCode_CAT)
                        echo "<option value='$tvaCode_CAT_URL' selected>$tvaLibelle_CAT_HTML</option>";
                    else
                        echo "<option value='$tvaCode_CAT_URL'>$tvaLibelle_CAT_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<label for='Prix_ING_id'>Prix</label> :
			<input type='text' placeholder='Ex : 13 €' value='$iPrix_ING' name='Prix_ING' required/>
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
			<input type='text' placeholder='Ex : 7' value='$iQuantiteStock_ING' name='QuantiteStock_ING' required/>
		</p>
		<p>
			<label for='Libelle_UNI_id'>Unité</label> :
			<!--<input type='text' placeholder='Ex : Noir' value='$iLibelle_UNI' name='Libelle_UNI' required/>-->
			<select name='Code_UNI'>";
                foreach ($tab_UNI as $uni)
                {
                    $uniLibelle_UNI_HTML = htmlspecialchars($uni->getLibelle_UNI());
                    $uniCode_UNI_URL = rawurlencode($uni->getCode_UNI());
                    if ($uni->getCode_UNI()==$iCode_UNI)
                        echo "<option value='$uniCode_UNI_URL' selected>$uniLibelle_UNI_HTML</option>";
                    else
                        echo "<option value='$uniCode_UNI_URL'>$uniLibelle_UNI_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<label for='Valeur_TVA_id'>TVA</label> :
			<!--<input type='text' placeholder='Ex : Noir' value='$iValeur_TVA' name='Valeur_TVA' required/>-->
			<select name='Code_TVA'>";
                foreach ($tab_TVA as $tva)
                {
                    $tvaValeur_TVA_HTML = htmlspecialchars($tva->getValeur_TVA());
                    $tvaCode_TVA_URL = rawurlencode($tva->getCode_TVA());
                    if ($tva->getCode_TVA()==$iCode_TVA)
                        echo "<option value='$tvaCode_TVA_URL' selected>$tvaValeur_TVA_HTML</option>";
                    else
                        echo "<option value='$tvaCode_TVA_URL'>$tvaValeur_TVA_HTML</option>";
                }
echo       "</select>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>";
?>