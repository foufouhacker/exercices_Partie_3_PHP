<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /* exercice_1*/

$table = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 
'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

/* exercice_2*/
echo $table[5];

/* exercice_3*/
foreach ($table as $value) {
   echo $value . ' ';
}
/* exercice_4 */
$departements = [2 => 'Aisne', 59 => 'Nord', 60 => ' Oise', 62 => 'Pas-de-Calais' , 80 => 'Somme'];


/* exercice_5 */
foreach ($departements as $key => $value) {
    echo $value . ' ';
}

/* exercice_6*/
foreach ($departements as $key => $value) {
    
    ?>
    <p><?='le departement'.  $value . 'a le numéro'. $key; ?></p>
    <?php
}
?>

</body>
</html>