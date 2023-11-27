<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercices PHP</title>
</head>
<body>

    <h1>Exercices PHP</h1>

    <label for="exercises">Sélectionnez un exercice :</label>
    <select id="exercises" onchange="openExercise()">
        <optgroup label="Groupe 1">
            <option value="../rayon.php">Calcul de diamètre</option>
            <option value="../NombrePremier.php">Test Nombre premier</option>
            <!-- Ajoutez des options pour les exercices du Groupe 1 -->
        </optgroup>
        <optgroup label="Groupe 2">
            <option value="../NombrePremier.php">Exercice 3</option>
            <option value="../tableau.php">Exercice 4</option>
            <!-- Ajoutez des options pour les exercices du Groupe 2 -->
        </optgroup>
        <optgroup label="Groupe 3">
            <option value="exercice5.php">Exercice 5</option>
            <option value="exercice6.php">Exercice 6</option>
            <!-- Ajoutez des options pour les exercices du Groupe 3 -->
        </optgroup>
    </select>

    <script>
        function openExercise() {
            var exerciseSelect = document.getElementById("exercises");
            var selectedExercise = exerciseSelect.options[exerciseSelect.selectedIndex].value;
            if (selectedExercise) {
                window.open(selectedExercise, "_blank");
            }
        }
    </script>

</body>
</html>