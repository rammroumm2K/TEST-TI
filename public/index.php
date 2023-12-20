<?php


if(isset($_GET['p'])){
  
    switch($_GET['p']){


        case 'form':
            $title = "Contactez Nous";
            include('../templates/contact.php');
            break;
        case 'cult':
            $title = "La culture";
            include('../templates/culture.php');
            break;
            case 'gal':
                $title = "La galerie";
                include('../templates/galerie.php');
                break;
                case 'geo':
                    $title = "Geographie";
                    include('../templates/geographie.php');
                    break;
                    case 'hist':
                        $title = "Histoire";
                        include('../templates/histoire.php');
                        break;
                        case 'link':
                            $title = "Liens";
                            include('../templates/liens.php');
                            break;
                     
        
        default:
        
            $title = "Erreur 404";
            include('../templates/erreur404.php');
    }

}else{
    $title ="Accueil";

    include('../templates/accueil.php');
}
