<?php 
    if(isset($_POST["number"])){
        $rayon = (int) $_POST["number"];
        $diametre = $rayon*2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
   <form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
   <?php
        if (isset($diametre)){
        echo "<p>Le diamètre est : <?php echo $diametre ?></p>";
        }
    ?>
</body>
</html>