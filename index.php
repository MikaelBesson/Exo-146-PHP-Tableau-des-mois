<?php

$mois = [
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

echo "<br>exercices 2<br><br>";

echo $mois[2]."<br>";

echo "<br>exercices 3<br><br>";

echo $mois[5]."<br>";

echo "<br>exercices 4<br><br>";
$search4 = "u";
$result4 = str_replace("$search4","ù",$mois[7]);
echo $result4."<br>";

echo "<br>exercices 5<br><br>";

$nord = [
    59 => "nord",
    62 => "pas de calais",
    80 => "somme",
    02 => "aisne",
    60 => "oise",
];

echo "<br>exercices 6<br><br>";
echo $nord[59];

echo "<br>exercices 7<br><br>";
$nord[51] = "marne";

echo "<br>exercices 8<br><br>";
foreach ($mois as $moi){
    echo $moi."<br>";
}

echo "<br>exercices 9<br><br>";
foreach ($nord as $dept){
    echo $dept."<br>";
}

echo "<br>exercices 10<br><br>";


        foreach ($nord as $key => $value){
            echo "Le departement ".$value." a le numero ".$key."<br>";
}




