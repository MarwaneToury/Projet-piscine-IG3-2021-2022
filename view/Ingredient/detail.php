<h2> Détail de l'ingrédient </h2>
<?php
$vImmatriculation = htmlspecialchars($v->getImmatriculation());
$vMarque = htmlspecialchars($v->getMarque());
$vCouleur = htmlspecialchars($v->getCouleur());
echo "<p> Voiture d'immatriculation $vImmatriculation, de marque $vMarque et de couleur $vCouleur</p>";
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='update'/>
	<input type='hidden' name='immat' value='$vImmatriculation'/>
	<button type='submit'>Modifier la voiture</button>
</form>";
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='delete'/>
	<input type='hidden' name='immat' value='$vImmatriculation'/>
	<button type='submit'>Supprimer la voiture</button>
</form>";
?>
