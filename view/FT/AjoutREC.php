<h3> Ajout recette </h3>
<?php
$Progression_REC = htmlspecialchars($v->getProgression_REC()); //TODO: je sais pas si les trucs là sont utiles ou juste le form et aussi comment on check si les champs sont correctement remplis ?
$Libelle_REC = htmlspecialchars($v->getLibelle_REC());
$ChargesSup_REC = htmlspecialchars($v->getChargesSup_REC());
$CoutPersonnel_REC = htmlspecialchars($v->getCoutPersonnel_REC());
$Assaisonement_REC = htmlspecialchars($v->getAssaisonement_REC());
$CoeffCout_REC = htmlspecialchars($v->getCoeffCout_REC());
echo "
<h2> Formulaire create fiche technique </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for='Progression_REC_id'>Progression</label> :
        	<input type='text' placeholder='Ex : Banane' value='$Progression_REC' name='Progression_REC' required/>
        </p>
        <p>
            <label for='Libelle_REC_id'>Libellé fiche technique</label> :
            <input type='text' placeholder='Ex : Banane' value='$Libelle_REC' name='Libelle_REC' required/>
        </p>
        <p>
            <label for='ChargesSup_REC_id'>Charges supplémentaires</label> :
            <input type='text' placeholder='Ex : Banane' value='$ChargesSup_REC' name='ChargesSup_REC' required/>
        </p>
        <p>
           <label for='CoutPersonnel_REC_id'>Coût du personnel</label> :
            <input type='text' placeholder='Ex : Banane' value='$CoutPersonnel_REC' name='CoutPersonnel_REC' required/>
        </p>
        <p>
            <label for='CoeffCout_REC_id'>Coefficient sur le coût</label> :
            <input type='text' placeholder='Ex : Banane' value='$CoeffCout_REC' name='CoeffCout_REC' required/>
        </p>
        <p>
             <label for='Assaisonement_REC_id'>Assaisonnement</label> :
             <input type='text' placeholder='Ex : Banane' value='$Assaisonement_REC' name='Assaisonement_REC' required/>
        </p>
	    <p>
    	    <input type='submit' value='Envoyer' />
        </p>
    </fieldset>
</form>";
?>