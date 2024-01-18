<?php

class Etudiant {
    //Attriobuts ou propriétés
    protected $id;
    protected $prenom;
    protected $nom;
    protected $adresse;
    protected $password;

   // Constructeur le principe de la surcharge

    //Getters
    public function getId() {
        return $this->id;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function getPassword(){
        return $this->password;
    }
    //Setters
    public function setID($id) {
        $this->id = $id;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

}