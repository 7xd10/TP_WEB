<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP Débutant</title>
</head>
<body>

<?php
/* PARTIE 1 */

$module = "Programmation Web";
$enseignant = "M. Ahmed";
$nbEtudiants = 3;
$noteValidation = 10;

echo "<h2>Informations</h2>";
echo "Module : " . $module . "<br>";
echo "Enseignant : " . $enseignant . "<br>";
echo "Nombre d'étudiants : " . $nbEtudiants . "<br>";
echo "Note de validation : " . $noteValidation . "<br>";

$noteValidation = 12;
echo "<br>Nouvelle note de validation : " . $noteValidation . "<br>";

/* PARTIE 2 */

$etudiants = array("Ali", "Sara", "Omar");
$notes = array(12, 9, 15);

echo "<h2>Liste des étudiants</h2>";

for ($i = 0; $i < 3; $i++) {
    echo $etudiants[$i] . " : " . $notes[$i] . "<br>";
}

$etudiants[3] = "Amina";
$notes[3] = 14;

echo "<h3>Après ajout d'un étudiant</h3>";
for ($i = 0; $i < 4; $i++) {
    echo $etudiants[$i] . " : " . $notes[$i] . "<br>";
}

/* CALCULS SANS FONCTIONS*/

$somme = 0;
$max = $notes[0];
$min = $notes[0];

for ($i = 0; $i < 4; $i++) {
    $somme = $somme + $notes[$i];

    if ($notes[$i] > $max) {
        $max = $notes[$i];
    }

    if ($notes[$i] < $min) {
        $min = $notes[$i];
    }
}

$moyenne = $somme / 4;

echo "<br>Moyenne : " . $moyenne . "<br>";
echo "Note maximale : " . $max . "<br>";
echo "Note minimale : " . $min . "<br>";

/* PARTIE 3*/

echo "<h2>Étudiants validés</h2>";

$valides = 0;
$nonValides = 0;

for ($i = 0; $i < 4; $i++) {

    if ($notes[$i] >= $noteValidation) {
        echo ($i + 1) . ". " . $etudiants[$i] . "<br>";
        $valides = $valides + 1;
    } else {
        $nonValides = $nonValides + 1;
    }
}

echo "<br>Validés : " . $valides . "<br>";
echo "Non validés : " . $nonValides . "<br>";

/*PARTIE 4*/

function moyenne($a, $b, $c, $d) {
    return ($a + $b + $c + $d) / 4;
}

function valider($note, $noteValidation) {
    if ($note >= $noteValidation) {
        return "Validé";
    } else {
        return "Non validé";
    }
}

function message($note) {
    if ($note >= 15) {
        return "Très bien";
    } else if ($note >= 10) {
        return "Bien";
    } else {
        return "Insuffisant";
    }
}

echo "<h2>Résultats finaux</h2>";

for ($i = 0; $i < 4; $i++) {
    echo $etudiants[$i] . " : " . $notes[$i] . " - " . message($notes[$i]) . "<br>";
}
?>

</body>
</html>
