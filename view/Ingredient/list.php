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
    $iEstAllergene_ING_HTML = htmlspecialchars($i->getEstAllergeneING());
    $iCode_UNI_HTML = htmlspecialchars($i->getCodeUNI());
    $iCode_TVA_HTML = htmlspecialchars($i->getCodeTVA());
    $iCode_CAT_HTML = htmlspecialchars($i->getCodeCAT());

    echo "
    <p>
        <!--<a href='index.php?action=read&Code_ING=$iCode_ING_URL'>
            Modifier
        </a> -->
        $iCode_ING_HTML
        $iLibelle_ING_HTML
        $iPrix_ING_HTML
        $iEstAllergene_ING_HTML
        <!-- $iCode_UNI_HTML
        $iCode_TVA_HTML
        $iCode_CAT_HTML-->
        <form method='get' action='index.php'>
	        <input type='hidden' name='action' value='update'/>
	        <input type='hidden' name='code_ing' value='$iCode_ING_HTML'/>
	        <button type='submit'>⚙</button>
        </form>
    </p>";
}
?>