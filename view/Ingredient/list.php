<h2> Liste des ingrédients </h2>
<?php
echo "
<form method='get' action='index.php'>
    <input type='hidden' name='controller1' value='Ingredient'/>
	<input type='hidden' name='action1' value='create'/>
	<button type='submit'>Ajouter un ingrédient</button>
</form>";
$iCode_CAT_HTML = htmlspecialchars($tab_i[0]->getCodeCAT());
$iLibelle_CAT_HTML = htmlspecialchars($tab_i[0]->getLibelleCAT());
/* $TabLibString = implode(' ',$Tab_LibI); */
foreach ($tab_i as $i)
{
    if ($i->getCodeCAT() != $iCode_CAT_HTML)
    {
        $iCode_CAT_HTML = htmlspecialchars($i->getCodeCAT());
        $iLibelle_CAT_HTML = htmlspecialchars($i->getLibelleCAT());
        echo "<h4>$iLibelle_CAT_HTML</h4>";
    }

    $iCode_ING_URL = rawurlencode($i->getCodeING());
    $iCode_ING_HTML = htmlspecialchars($i->getCodeING());
    $iLibelle_ING_HTML = htmlspecialchars($i->getLibelleING());
    $iPrix_ING_HTML = htmlspecialchars($i->getPrixING());
    $iQuantiteStock_ING_HTML = htmlspecialchars($i->getQuantiteStockING());
    if ($i->getEstAllergeneING() == 0) $strAllergene="Non"; else $strAllergene="Oui";
    $iEstAllergene_ING_HTML = htmlspecialchars($strAllergene);
    $iValeur_TVA_HTML = htmlspecialchars($i->getValeurTVA());
    $iLibelle_UNI_HTML = htmlspecialchars($i->getLibelleUNI());
    echo "<p>
        $iLibelle_ING_HTML
        $iPrix_ING_HTML
        $iEstAllergene_ING_HTML
        $iQuantiteStock_ING_HTML$iLibelle_UNI_HTML
        $iValeur_TVA_HTML
        <form method='get' action='index.php'>
            <input type='hidden' name='controller1' value='Ingredient'/>
	        <input type='hidden' name='action1' value='update'/>
	        <input type='hidden' name='code_ing' value='$iCode_ING_URL'/>
	        <button type='submit'>⚙</button>
        </form>
    </p>";
}
?>