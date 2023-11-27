<?php 
    $personnes = [
        "N°1" => ["prenom"=>"Mouhamed","nom"=>"Fall","ville"=>"Thiès","age"=>22],
        "N°2" => ["prenom"=>"Maman","nom"=>"Diop","ville"=>"Mbour","age"=>34],
        "N°3" => ["prenom"=>"Oumou","nom"=>"Gueye","ville"=>"Dakar","age"=>18],
        "N°4" => ["prenom"=>"Babelle","nom"=>"Ba","ville"=>"Fatick","age"=>24]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau associatif</title>
</head>
<body>
   <table border=1>
    <tr>
        <td>Clé</td>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Ville</td>
        <td>Age</td>
    </tr>
    <?php
    foreach ($personnes as $key=>$person) {?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $person["prenom"]?></td>
            <td><?php echo $person["nom"] ?></td>
            <td><?php echo $person["ville"] ?></td>
            <td><?php echo $person["age"] ?></td>
        </tr>
    <?php } ?>
   </table>
</body>
</html>