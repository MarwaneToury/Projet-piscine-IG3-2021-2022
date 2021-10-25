<h2> Liste des ingrédients </h2>
<?php
echo "
<div class='header'>
    <ul>
        <li><a href='#CREMERIE '>Crèmerie</a></li>
        <li><a href='#EPICERIE'>Epicerie</a></li>
        <li><a href='#FRUITS ET LEGUMES'>Fruits et Légumes</a></li>
        <li><a href='#POISSON ET CRUSTACES'>Poissons et Crustacés</a></li>
        <li><a href='#VIANDES/VOLAILLES'>Viandes et Volailles</a></li>
    </ul>
    <form method='get' action='index.php'>
        <input type='hidden' name='controller1' value='Ingredient'/>
    	<input type='hidden' name='action1' value='create'/>
    	<button id='ajout_ing' class='head_bouton' type='submit'>Ajouter un ingrédient</button>
        <input id='searchInput' type='search' placeholder='RECHERCHE' aria-label='Barre de recherche'>
        <div id ='suggestions'></div>
        <button id='recherche' type='submit' aria-label='Bouton de recherche'>RECHERCHER</button>
    </form>
</div>";
$iCode_CAT_HTML = htmlspecialchars($tab_i[0]->getCodeCAT());
$iLibelle_CAT_HTML = htmlspecialchars($tab_i[0]->getLibelleCAT());
/* $TabLibString = implode(' ',$Tab_LibI); */
echo "
<div id='main'>
    <h4 id='$iLibelle_CAT_HTML'>$iLibelle_CAT_HTML</h4>
    <table id='liste_prdt'> <!--Liste de tous les produits actuellement dans la mercuriale-->
        <thead>
            <tr>
                <th>Libellé</th>
                <th>PrixUnitaire</th>
                <th>Allèrgène</th>
                <th>Unité</th>
                <th>TVA</th>
            </tr>
        </thead>";
/*
echo "<script>
let phpTabLibs = new Array();";
foreach($Tab_LibI as $Libs) {
    echo "phpTabLibs.push($Libs);";
}
echo "console.log(phpTabLibs);
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('keyup', function()
{
    const input = searchInput.value;

    const result = phpTabLibs.filter(item => item.includes(input));
    
    console.log(result);

    let suggest = '';

    if (input !='')
    {
        result.forEach (resultItem => 
            suggest += '<div id='suggestion'>${resultItem}</div>')
    }

    document.getElementById('suggestions').innerHTML = suggest;
});
</script>";*/
foreach ($tab_i as $i)
{
    $iCode_ING_URL = rawurlencode($i->getCodeING());
    $iCode_ING_HTML = htmlspecialchars($i->getCodeING());
    $iLibelle_ING_HTML = htmlspecialchars($i->getLibelleING());
    $iPrix_ING_HTML = htmlspecialchars($i->getPrixING());
    $iQuantiteStock_ING_HTML = htmlspecialchars($i->getQuantiteStockING());
    if ($i->getEstAllergeneING() == 0) $strAllergene="Non"; else $strAllergene="Oui";
    $iEstAllergene_ING_HTML = htmlspecialchars($strAllergene);
    $iValeur_TVA_HTML = htmlspecialchars($i->getValeurTVA());
    $iLibelle_UNI_HTML = htmlspecialchars($i->getLibelleUNI());
    echo "
        <tr>
            <th>$iLibelle_ING_HTML</th>
            <th>$iPrix_ING_HTML</th>
            <th>$iEstAllergene_ING_HTML</th>
            <th>$iQuantiteStock_ING_HTML $iLibelle_UNI_HTML</th>
            <th>$iValeur_TVA_HTML</th>
            <th><form method='get' action='index.php'>
            <input type='hidden' name='controller1' value='Ingredient'/>
	        <input type='hidden' name='action1' value='update'/>
	        <input type='hidden' name='code_ing' value='$iCode_ING_URL'/>
	        <button type='submit'>⚙</button>
        </form></th>
        </tr>";
    if ($i->getCodeCAT() != $iCode_CAT_HTML)
    {
        $iCode_CAT_HTML = htmlspecialchars($i->getCodeCAT());
        $iLibelle_CAT_HTML = htmlspecialchars($i->getLibelleCAT());
        echo "
        </table>
            <h4 id='$iLibelle_CAT_HTML'>$iLibelle_CAT_HTML</h4>
            <table id='liste_prdt'>
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>PrixUnitaire</th>
                    <th>Allèrgène</th>
                    <th>Unité</th>
                    <th>TVA</th>
                </tr>
            </thead>";
    }
}
echo"
</table>
</div>
<ul id='menu'>
    <li><a href='#header'>Revenir en haut de la page</li>
</ul>";
/*
<form method='get' action='index.php'>
    <input type='hidden' name='controller1' value='Ingredient'/>
    <input type='hidden' name='action1' value='update'/>
    <input type='hidden' name='code_ing' value='$iCode_ING_URL'/>
    <button type='submit' id='$iCode_ING_URL'>⚙</button>
</form>
*/
?>