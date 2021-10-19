<h2> Liste des recettes existantes avec tous les attributs </h2>
<?php
foreach ($tab_r as $r) { //TODO: Check si je fais pas de la merde là aussi
    $rLibelle_REC_URL = rawurlencode($r->getLibelle_REC());
    $rLibelle_REC_HTML = htmlspecialchars($r->getLibelle_REC());
    $rCode_AUT_URL = rawurlencode($r->getCode_AUT());
    $rNom_AUT_HTML = htmlspecialchars($r->getNom_AUT());
    $rCode_REC_URL = rawurlencode($r->getCode_REC());
    $rCode_REC_HTML = htmlspecialchars($r->getCode_REC());
    $rCout_REC_URL = rawurlencode($r->getCout_REC());
    $rCout_REC_HTML = htmlspecialchars($r->getCout_REC());
    $rCoeffCout_REC_URL = rawurlencode($r->getCoeffCout_REC());
    $rCoeffCout_REC_HTML = htmlspecialchars($r->getCoeffCout_REC());
    $rAssaisonement_REC_URL = rawurlencode($r->getAssaisonement_REC());
    $rAssaisonement_REC_HTML = htmlspecialchars($r->getAssaisonement_REC());
    $rCoutPersonnel_REC_URL = rawurlencode($r->getCoutPersonnel_REC());
    $rCoutPersonnel_REC_HTML = htmlspecialchars($r->getCoutPersonnel_REC());
    $rChargesSup_REC_URL = rawurlencode($r->getChargesSup_REC());
    $rChargesSup_REC_HTML = htmlspecialchars($r->getChargesSup_REC());
    $rProgression_REC_URL = rawurlencode($r->getProgression_REC());
    $rProgression_REC_HTML = htmlspecialchars($r->getProgression_REC());
    $rCode_CAT2_URL = rawurlencode($r->getCode_CAT2());
    $rLibelle_CAT2_HTML = htmlspecialchars($r->getLibelle_CAT2());
    echo "
    <p>
        Libellé
        <a href='index.php?action=read&libelle=$rLibelle_REC_URL'>
            $rLibelle_REC_HTML
        </a>
    </p>";
    echo "
       <p>
           Auteur 
           <a href='index.php?action=read&AUT= $rCode_AUT_URL'>
                $rNom_AUT_HTML
           </a>
       </p>";
    echo "
       <p>
           Code 
           <a href='index.php?action=read&Code=$rCode_REC_URL'>
               $rCode_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Coefficient 
           <a href='index.php?action=read&Coeff= $rCoeffCout_REC_URL'>
               $rCoeffCout_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Assaisonement 
           <a href='index.php?action=read&Assaisonnement=$rAssaisonement_REC_URL'>
               $rAssaisonement_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Coût de personnel 
           <a href='index.php?action=read&CoutPersonnel= $rCoutPersonnel_REC_URL'>
                $rCoutPersonnel_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Charges supplémentaires
           <a href='index.php?action=read&ChargesSup= $rChargesSup_REC_URL'>
               $rChargesSup_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Progression
           <a href='index.php?action=read&Progression=$rProgression_REC_URL'>
               $rProgression_REC_HTML
           </a>
       </p>";
    echo "
       <p>
           Catégorie
           <a href='index.php?action=read&CAT2=$rCode_CAT2_URL'>
               $rLibelle_CAT2_HTML
           </a>
       </p>";
    echo "
       <p>
           Coût total
           <a href='index.php?action=read&Cout=$rCout_REC_URL'>
                $rCout_REC_HTML
           </a>
       </p>";
}
?>