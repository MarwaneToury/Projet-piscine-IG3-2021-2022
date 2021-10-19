<?php
$immat = htmlspecialchars($immat);
$marque = htmlspecialchars($marque);
$couleur = htmlspecialchars($couleur);
$controller = static::$object;
echo "
<h2> Formulaire pour voiture </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
	<fieldset>
		<legend>Mon formulaire :</legend>
		<p>
			<label for='immat_id'>Immatriculation</label> :
			<input $StateImmatField type='text' placeholder='Ex : 256AB34' value='$immat' name='immatriculation' required/>
		</p>
		<p>
			<label for='marque_id'>Marque</label> :
			<input type='text' placeholder='Ex : Renault' value='$marque' name='marque' required/>
		</p>
		<p>
			<label for='couleur_id'>Couleur</label> :
			<input type='text' placeholder='Ex : Noir' value='$couleur' name='couleur' required/>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>"
?>