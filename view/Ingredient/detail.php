<h2> Détail de l'ingrédient </h2>
<?php
$vCode_ING = htmlspecialchars($v->getCode_ING());
$vLibelleING = htmlspecialchars($v->getLibelleING());
$vPrixING = htmlspecialchars($v->getPrixING());
$vQuantiteStockING = htmlspecialchars($v->getQuantiteStockING());
$vEstAllergeneING = htmlspecialchars($v->getEstAllergeneING());
echo "<p> Ingrédient numéro $vCode_ING, de libellé $vLibelleING, de prix $vPrixING, de quantité stockée $vQuantiteStockING, et est allergène : $vEstAllergeneING</p>";
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='update'/>
	<input type='hidden' name='codeING' value='$vCode_ING'/>
	<button type='submit'>Modifier ce produit</button>
</form>";
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='delete'/>
	<input type='hidden' name='codeING' value='$vCode_ING'/>
	<button type='submit'>Supprimer ce produit</button>
</form>";
?>
