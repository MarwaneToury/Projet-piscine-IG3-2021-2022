<h2> Liste des recettes existantes </h2>
<?php
echo "
<form method='get' action='index.php'>
    <input type='hidden' name='controller' value='FT'
	<input type='hidden' name='action' value='create'/>
	<button type='submit'>Ajouter une fiche technique</button>
</form>"; // Pas sûre de ce que j'ai mit dans value

$Code_AUT_URL = rawurlencode($r->getCode_AUT());
$Nom_AUT_URL = htmlspecialchars($tab_i[0]->getNom_AUT()); //Check l'indice dans la table
echo "<h4>$Nom_AUT_URL</h4>";

foreach ($tab_r as $r) {
    $libelle_REC_URL = rawurlencode($r->getLibelle_REC());
    $Code_AUT_URL = rawurlencode($r->getCode_AUT());
    $libelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $Code_AUT_HTML = htmlspecialchars($r->getCode_AUT());

    echo "
    <p>
        Fiche technique de libellé
        <a href='index.php?action=read&libelle=$libelle_REC_URL'>
            $libelle_REC_HTML
        </a>
    </p>";
    echo "
        <p>
            Fiche technique d'auteur
            <a href='index.php?action=read&AUT=$Code_AUT_URL'>
                $Code_AUT_HTML
            </a>
        </p>";
?>