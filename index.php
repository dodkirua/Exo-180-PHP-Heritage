<?php
require "./classes/Habitation.php";
require "./classes/Maison.php";
require "./classes/Appartement.php";
/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

$maison1 = new Maison('France','Anor','59186',3,8,true,2,true);
$maison2 = new Maison('Belgique','Momignies','6590',1,3,false,1,true);

echo $maison1;
echo "<br>";
echo $maison2;
echo "<br>";

echo "<br>";
$appart = new Appartement('Japon','Fujieda','426-0025',1,3,false);
echo $appart;
echo "<br>";
$appart->setChambre(2);
$appart->setGarage(true);
$appart->setPiece(6);
$appart->setPays('Etat-Unis');
$appart->setVille('Los Angeles');
$appart->setCp("90001");

echo $appart;