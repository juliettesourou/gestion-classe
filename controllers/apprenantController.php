<?php
$classes= getAllClasses();
$apprenants=getAllapprenant();
 
// APRES verifier des elemnts passe à $classse grace a var_dump  die(); permet afficher ses element sur une autre page

if(isset($_POST["ajouter"])){
    extract($_POST);

    if(ajouterApprenant( $prenom, $nom, $adresse, $datenais, $lieunais, $idclasse )) {
        return header("location: ?page=apprenant&message=add");

    }
}

//controlle pour verifier les modification verifier si le button verifier exsite

if (isset($_POST['modifier'])) {
    extract($_POST);
    if (modifierApprenant( $id, $prenom, $nom, $adresse, $datenais, $lieunais, $idclasse  )) {
        return header("location: ?page=apprenant");
    }
}

//controle pour verifier si le button suppremier exsite

if(isset($_GET['delete'])) {
    if(supprimerApprenant($_GET["delete"])) {
        return header("location: ?page=apprenant");
    }
}


require_once("./views/apprenant.php"); 
//pour la modification des information des apprenants
//id
if (isset($_GET['type'])) {
    if (isset($_GET['id'])) {
        $c = getApprenantById($_GET['id']);
    }
    require_once("./views/ajoutApprenant.php");
} else {
    require_once("./views/apprenant.php");
}