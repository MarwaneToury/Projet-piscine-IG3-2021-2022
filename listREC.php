<h2> Liste des recettes existantes avec tous les attributs </h2>
<?php
foreach ($tab_r as $r) { //TODO: Check si je fais pas de la merde là aussi
    $libelle_REC_URL = rawurlencode($r->getLibelle_REC());
    $libelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $Code_AUT_URL = rawurlencode($r->getCode_AUT());
    $Code_AUT_HTML = htmlspecialchars($r->getCode_AUT());
    $Code_REC_URL = rawurlencode($r->getCode_REC());
    $Code_REC_HTML = htmlspecialchars($r->getCode_REC());
    $Cout_REC_URL = rawurlencode($r->getCout_REC());
    $Cout_REC_HTML = htmlspecialchars($r->getCout_REC());
    $CoeffCout_REC_URL = rawurlencode($r->getCoeffCout_REC());
    $CoeffCout_REC_HTML = htmlspecialchars($r->getCoeffCout_REC());
    $Assaisonement_REC_URL = rawurlencode($r->getAssaisonement_REC());
    $Assaisonement_REC_HTML = htmlspecialchars($r->getAssaisonement_REC());
    $CoutPersonnel_REC_URL = rawurlencode($r->getCoutPersonnel_REC());
    $CoutPersonnel_REC_HTML = htmlspecialchars($r->getCoutPersonnel_REC());
    $ChargesSup_REC_URL = rawurlencode($r->getChargesSup_REC());
    $ChargesSup_REC_HTML = htmlspecialchars($r->getChargesSup_REC());
    $Progression_REC_URL = rawurlencode($r->getProgression_REC());
    $Progression_REC_HTML = htmlspecialchars($r->getProgression_REC());
    $Code_CAT2_URL = rawurlencode($r->getCode_CAT2());
    $Code_CAT2_HTML = htmlspecialchars($r->getCode_CAT2());
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
           <a href='index.php?action=read&AUT= $Code_AUT_URL'>
                $Code_AUT_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de code
           <a href='index.php?action=read&Code=$Code_REC_URL'>
               $Code_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de coeff
           <a href='index.php?action=read&Coeff= $CoeffCout_REC_URL'>
               $CoeffCout_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique d'assaisonnement'
           <a href='index.php?action=read&Assaisonnement=$Assaisonement_REC_URL'>
               $Assaisonement_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de coût de personnel
           <a href='index.php?action=read&CoutPersonnel= $CoutPersonnel_REC_URL'>
                $CoutPersonnel_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de charges supplémentaires
           <a href='index.php?action=read&ChargesSup= $ChargesSup_REC_URL'>
               $ChargesSup_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de Progression
           <a href='index.php?action=read&Progression=$Progression_REC_URL'>
               $Progression_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de catégorie
           <a href='index.php?action=read&CAT2=$Code_CAT2_URL'>
               $Code_CAT2_HTML
           </a>
       </p>";
    echo "
       <p>
           Fiche technique de coût
           <a href='index.php?action=read&Cout=$Cout_REC_URL'>
                $Cout_REC_HTML
           </a>
       </p>";
?>