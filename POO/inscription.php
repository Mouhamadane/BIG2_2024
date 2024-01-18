<?php
require_once("./Connexion.php");
global $connect;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Asset/style.css">
    <title>Inscription</title>
</head>
<body>
    <form class="login" method="post">
        <input type="text" name="prenom" id="" placeholder="Prénom" required>
        <input type="text" name="nom" id="" placeholder="Nom" required>
        <input type="text" name="email" id="" placeholder="Email" required>
        <input type="password" name="password" id="" placeholder="Password" required>
        <button type="submit">Inscrire</button>
    </form>
</body>
</html>