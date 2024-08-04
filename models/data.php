<?php

//connexion  la base de données

try {
    $serveur = "localhost";
    $pass = "july";
    $login = "july";

    $connexion = new PDO("mysql:dbname=gesclasse;host=localhost", $pass, $login);
} catch (PDOException $th) {
    die("Erreur : " . $th->getMessage());
}

//requete pour selectionner toutes les classes
function getAllClasses()
{
    global $connexion;
    try {
        $q = $connexion->prepare("SELECT *FROM classe order by nom ASC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}

//pour l'apprenant
function getAllapprenant()
{
    global $connexion;
    try {
        $q = $connexion->prepare("SELECT *FROM apprenant order by id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}


//requete pour selectionner le id element envoyer dans la bd
function getClassById($id)
{
    global $connexion;
    try {
        $q = $connexion->prepare("SELECT *FROM classe WHERE id =:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}
//pour l'apprenants pour la modification


function getApprenantById($id)
{
    global $connexion;
    try {
        $q = $connexion->prepare("SELECT *FROM classe WHERE id =:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}

//pour les button ajouter et supprimée

function supprimerClasse($id)
{
    global $connexion;
    try {
        $q = $connexion->prepare("DELETE  FROM classe WHERE id =:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}

//Pour le button modifier de ajoute
function modifierClasse($id, $nom, $taille)
{
    global $connexion;
    try {
        $q = $connexion->prepare("UPDATE classe  SET nom=:nom, taille=:taille WHERE id =:id");
        return $q->execute([
           "nom" => $nom,
           "taille" =>$taille,
            "id" => $id,
         ]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}


//POUR LES BUTTONS SUPPRIME ET MODIFIER APPRENANTS

function supprimerApprenant($id)
{
    global $connexion;
    try {
        $q = $connexion->prepare("DELETE  FROM apprenant WHERE id =:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}
        //POUR LES BUTTONS MODIFIER
function modifierApprenant($id, $prenom, $nom, $adresse, $datenais, $lieunais, $idclasse )  
{
    global $connexion;
    try {
        $q = $connexion->prepare("UPDATE apprenant  SET prenom=:prenom, nom=:nom, adress=:adesse, datenais=:datenais, lieunais=:lieunais, idclasse=:lieunais WHERE id =:id");
        return $q->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":adresse" => $adresse,
            ":datenais" => $datenais,
            ":lieunais" => $lieunais,
            ":idclasse" => $idclasse,
            "id" => $id,

         ]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}


//pour les nom et tailler de ajoutclass

function ajouterClass($nom, $taille)
{
    global $connexion;

    try {
        $q = $connexion->prepare("INSERT INTO classe VALUES(null, :nom, :taille)");
        return $q->execute([
            ":nom" => $nom,
            ":taille" => $taille,
        ]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}

//pour l,apprenant apres ajoute

function ajouterApprenant($prenom, $nom, $adresse, $datenais, $lieunais, $idclasse) {
    global $connexion;

    try {
        // Correction de la syntaxe SQL : suppression de 'null'
        $q = $connexion->prepare("INSERT INTO apprenant(prenom, nom, adresse, datenais, lieunais, idclasse) VALUES (:prenom, :nom, :adresse, :datenais, :lieunais, :idclasse)");
        
        // Correspondance correcte des clés
        return $q->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":adresse" => $adresse,
            ":datenais" => $datenais,
            ":lieunais" => $lieunais,
            ":idclasse" => $idclasse,
        ]);
    } catch (PDOException $th) {
        die("Erreur : " . $th->getMessage());
    }
}
