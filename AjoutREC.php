<h2> Ajout recette </h2>
<?php
$Progression_REC = htmlspecialchars($v->getProgression_REC());
$Libelle_REC = htmlspecialchars($v->getLibelle_REC());
$ChargesSup_REC = htmlspecialchars($v->getChargesSup_REC());
$CoutPersonnel_REC = htmlspecialchars($v->getCoutPersonnel_REC());
$Assaisonement_REC = htmlspecialchars($v->getAssaisonement_REC());
$CoeffCout_REC = htmlspecialchars($v->getCoeffCout_REC());
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='create'/>
	<input type='hidden' name='Progression' value='$Progression_REC'/>
	<input type='hidden' name='Nom' value='$Libelle_REC'/>
	<input type='hidden' name='ChargesSup' value='$ChargesSup_REC'/>
	<input type='hidden' name='CoutPersonnel' value='$CoutPersonnel_REC'/>
	<input type='hidden' name='Assaisonnement' value='$Assaisonement_REC'/>
	<input type='hidden' name='CoeffCout' value='$CoeffCout_REC'/>
	<button type='submit'>Créer la fiche technique</button>
</form>";
?>