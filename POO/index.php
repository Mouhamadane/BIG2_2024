<?php
require_once("./Etudiant.php");
require_once("./Connexion.php");
global $connect;

// Avec la méthode des tableaux associatifs

$query = $connect->query("SELECT * FROM etudiant ");
$list = $query->fetchAll();
?>
<table border="1">
    <tr>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Adress</td>
    </tr>
    <?php foreach ($list as $etudiant) {?>
    <tr>
        <td><?= $etudiant["prenom"] ?></td>
        <td><?= $etudiant["nom"] ?></td>
        <td><?= $etudiant["adresse"] ?></td>
    </tr>
    <?php } ?>
</table>
<br><br>

<?php
// Avec la méthode des classes
$request = $connect->query("SELECT * FROM etudiant ");
$students = $request->fetchAll(PDO::FETCH_CLASS, 'Etudiant');
?>
<table border="1">
    <tr>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Adress</td>
    </tr>
    <?php foreach ($students as $student) {?>
    <tr>
        <td><?= $student -> getPrenom()?></td>
        <td><?= $student -> getNom()?></td>
        <td><?= $student -> getAdresse()?></td>
    </tr>
    <?php } ?>
</table>






