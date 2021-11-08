<?php 
    
    if(isset($_GET["section"])){
        switch ($_GET["section"]) {
            case 'accueil':
                include("views/page/accueil.php");
                break;
            case 'enfant':
                include("views/page/enfant.php");
                break;
            case 'femme':
                include("views/page/femme.php");
                break;
            case 'homme':
                    include("views/page/homme.php");
                    break;
             case 'robes':
                    include("views/page/robes.php");
                    break;
            case 'connexion':
                    include("views/page/connexion.php");
                    break;
            default:
                # code...
                break;
        }

    }
    else {
        include("views/page/accueil.php");
    }
?>
