<?php

$age = 1;

 

if ($age <= 12) 

{

    echo "Salut jeune homme ! Bienvenue sur mon site !<br />";

    $autorisation_entrer = "Oui";

}

else // SINON

{

    echo "Ceci est un site pour enfants, vous etes trop vieux pour pouvoir  entrer. Au revoir !<br />";

    $autorisation_entrer = "Non";

}

 

echo "Avez-vous l'autorisation d'entrer ? La reponse est : $autorisation_entrer";

?>