<?php


$classe = getAllClasses();

//pour verifier si la valeur exsite (ajouter)
if (isset($_POST['ajouter'])) {
    extract($_POST);
    if (ajouterClass($nom, $taille)) {
        return header("location: ?page=classe");
    }
}
//controlle pour verifier les modification verifier si le button verifier exsite

if (isset($_POST['modifier'])) {
    extract($_POST);
    if (modifierClasse($id, $nom, $taille)) {
        return header("location: ?page=classe");
    }
}

//controle pour verifier si le button suppremier exsite

if(isset($_GET['delete'])) {
    if(supprimerClasse($_GET["delete"])) {
        return header("location: ?page=classe");
    }
}


//id
if (isset($_GET['type'])) {
    if (isset($_GET['id'])) {
        $c = getClassById($_GET['id']);
    }
    require_once("./views/ajoutClasse.php");
} else {
    require_once("./views/classe.php");
}




//creation de la base de données getclasse

//integration de fontawesone
//traitement pour ajouter des images 