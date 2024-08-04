<?php

//Base de donnees
require_once("./models/data.php");


//entete
require_once("./partials/navbar.php");



//Contenu de la page

if (isset($_GET["page"])) {
    //le routeur
    switch ($_GET["page"]) {
        case 'classe':
            require_once("./controllers/classeController.php");

            break;

        case 'apprenant':
            require_once("./controllers/apprenantController.php");

            break;
        case 'home':
            require_once("./controllers/homeController.php");

            break;

        default:
            require_once("./controllers/homeController.php");
            break;
    }
} else {
    #code...
    require_once("./controllers/homeController.php");
}







//pied de page
require_once("./partials/footer.php");
