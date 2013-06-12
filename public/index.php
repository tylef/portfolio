<?php

  session_start();

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
 
 case 'applications':
   $page = "Applications";
   $contenu = file_get_contents("../informations/applications.html");
   break;

 case 'cv':
   $page = "CV";
   $contenu = file_get_contents("../informations/cv.html");
   break;

 case 'contact':
 /*Envoi du mail*/
   if(isset($_POST['text'])){
      $to = "thibault.lefrancois@gmail.com";
		  $subject = "Contact-PortFolio";
		  $message = $_POST['text'];
		  $from = $_POST['email'];
		  $headers = "From:" . $from;
		  mail($to,$subject,$message,$headers);
      $page = "Contact";
      $contenu = file_get_contents("../informations/contactSucces.html");
    }
    else {
        $page = "Contact";
       $contenu = file_get_contents("../informations/contact.html");
    }
   break;  

 case 'accueil':
   $page = "Accueil";
   $contenu = file_get_contents("../informations/accueil.html");
   break;

  case 'connexion':
    /* Connection  au site */
      if(isset($_POST['pseudo'])){
        if($_POST['pseudo'] == 'admin' && $_POST['mdp'] == 'test'){
          $_SESSION['pseudo'] = 'admin';
        }
      }

      if(isset($_SESSION['pseudo']))
          header('location:../admin/index.php');

      $page='Connexion';
      $contenu = file_get_contents("../informations/connection.html");
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