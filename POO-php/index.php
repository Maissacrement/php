<?php
    require 'Personnage.php';

    $perso = new Personnage("courtney");
    echo "Bonjour ".$perso->getName();
    var_dump($perso);
    var_dump($perso->estMajeur());
?>
