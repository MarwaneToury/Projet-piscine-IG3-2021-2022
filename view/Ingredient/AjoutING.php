<h2> Ajout Ingrédient </h2>
<?php
$Libelle_ING = htmlspecialchars($r->getLibelleING()); //TODO: je sais pas si les trucs là sont utiles ou juste le form et aussi comment on check si les champs sont correctement remplis ?
$Prix_ING = htmlspecialchars($r->getPrixING());
$EstAllergene_ING = htmlspecialchars($r->getEstAllergeneING());
$QuantiteStock_ING = htmlspecialchars($r->getQuantiteStockING());
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='create'/>
	<input type='hidden' name='Libellé Ingrédient' value='$Libelle_ING'/>
	<input type='hidden' name='Prix Ingrédient' value='$Prix_ING'/>
	<input type='hidden' name='Est Allergène' value='$EstAllergene_ING'/>
	<input type='hidden' name='Quantité dans le stock' value='$QuantiteStock_ING'/>
	<button type='submit'>Créer l'ingrédient'</button>
</form>";
?>