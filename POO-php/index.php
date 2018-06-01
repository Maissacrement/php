<?php
    require 'Personnage.php';

    $perso = new Personnage("courtney", 10);
    echo "Bonjour ".$perso->getName();
    var_dump($perso);
    var_dump($perso->estMajeur());
    $perso->aimeLaMusic("Y");
?>
