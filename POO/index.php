<?php
require_once("./Etudiant.php");

// Données etudiant
$row = ["id"=>001, "prenom"=>"Modou",
    "nom"=>"Fall",
    "adresse"=>"d=exemple.gmail.com",
    "password"=>"Passer123"
];

//Hydration avec le constructeur
$etudiant = new Etudiant($row);

// Création d'un objet vide
$etudiant2 = new Etudiant();


var_dump($etudiant);
var_dump($etudiant2);


