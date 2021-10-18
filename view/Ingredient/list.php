<h2> Liste des ingrédients </h2>
<?php
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='create'/>
	<button type='submit'>Ajouter un ingrédient</button>
</form>";
foreach ($tab_i as $i) {
    $iCode_ING_URL = rawurlencode($i->getCode_ING());
    $iCode_ING_HTML = htmlspecialchars($i->getCode_ING());
    $iLibelle_ING_HTML = htmlspecialchars($i->getLibelleING());
    $iPrix_ING_HTML = htmlspecialchars($i->getPrixING());
    $iQuantiteStock_ING_HTML = htmlspecialchars($i->getQuantiteStockING());
    if ($i->getEstAllergeneING() == 0) $strAllergene="Non"; else $strAllergene="Oui";
    $iEstAllergene_ING_HTML = htmlspecialchars($strAllergene);
    $iValeur_TVA_HTML = htmlspecialchars($i->getValeurTVA());
    $iLibelle_CAT_HTML = htmlspecialchars($i->getLibelleCAT());
    $iLibelle_UNI_HTML = htmlspecialchars($i->getLibelleUNI());

    echo "
    <p>
        $iLibelle_CAT_HTML
        $iLibelle_ING_HTML
        $iPrix_ING_HTML
        $iEstAllergene_ING_HTML
        $iQuantiteStock_ING_HTML$iLibelle_UNI_HTML
        $iValeur_TVA_HTML%
        <form method='get' action='index.php'>
	        <input type='hidden' name='action' value='update'/>
	        <input type='hidden' name='code_ing' value='$iCode_ING_URL'/>
	        <button type='submit'>⚙</button>
        </form>
    </p>";
}
?>