<?php

$argv;
unset($argv[0]);
$fichiers_total=count($argv);
$fichiers=$fichiers_total-1;
$fichier_final=$argv[$fichiers_total];
unset($argv[$fichiers_total]);
fopen($fichier_final, "w");

foreach($argv as $nom_du_fichier) {
    $contenu=fopen($nom_du_fichier, "r");
    file_put_contents($fichier_final, $contenu, FILE_APPEND);
}
?>