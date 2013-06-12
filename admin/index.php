 <?php

session_start();

if(!isset($_SESSION['pseudo']))
    header("location:../index.php?p=connection");


/**
 * initialisation des variables
 */
$squelette = "../ui/squelettes/defaut.php";
$titre = "Portfolio";
$menu = file_get_contents("../ui/fragments/menu.frg.html");
$footer = file_get_contents("../informations/footer.html");
$contenu = "";


/**
 * l'URL contient-il une demande d'action spécifique ?
 */
if (isset($_GET['p'])) {
  $action = $_GET['p'];
 } else {
  $action = "accueil";
 }


/**
 * exécuter l'action demandée 
 */
switch($action) {
 
 case "accueil":
  $page = "Accueil administration";
  $contenu = file_get_contents("../informations/admin_index.html", true);
  break;

  case "deconnexion":
    session_destroy();
    header("location:../index.php");
  break;

 default:
   $page = "erreur";
   $contenu = "page non trouvée";
 }

ob_start();
  require_once($squelette);
  $html = ob_get_contents();
ob_end_clean();

echo $html;

?> 