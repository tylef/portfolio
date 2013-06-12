<!doctype html>
<html lang="fr">
<head>
    <title>Portfolio</title>
    <meta http-equiv="content-type" 
  	  content="text/html;charset=utf-8" />
    <meta name="ROBOTS" content="INDEX, FOLLOW" />
    <link rel="stylesheet" href="../ui/css/style.css" media="screen"/>
    <link href="../ui/css/menu.css" rel="stylesheet" type="text/css">
    <link href="../ui/css/footer.css" rel="stylesheet" type="text/css">
    <link href="../ui/css/header.css" rel="stylesheet" type="text/css">
    <link href="../ui/css/print.css" rel="stylesheet" type="text/css" media="print">
	<link href="../lightbox/css/lightbox.css" rel="stylesheet" />
	<script src="../lightbox/js/jquery-1.7.2.min.js"></script>
	<script src="../lightbox/js/lightbox.js"></script>
	<!--[if IE 6]><link href="../ui/css/ie.css" rel="stylesheet" type="text/css"><![endif]-->
	<!--[if IE 7]><link href="../ui/css/ie.css" rel="stylesheet" type="text/css"><![endif]-->
	<!--[if IE 8]><link href="../ui/css/ie.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
    <header>
        <div id="enTete">
            <div class="TitreSite">Thibault Lefrançois</div>
            <div class="sousTitre">- Développeur -</div>
        </div>
            <div id="menu">
                <ul>
                   <li><a href='../public/index.php?p=accueil' <?php if($page=='Accueil') echo 'class="curent"'?>><span>Accueil</span></a></li>
                   <li><a href='../public/index.php?p=cv' <?php if($page=='CV') echo 'class="curent"'?>><span>Curriculum Vitae</span></a></li>
                   <li><a href='../public/index.php?p=applications' <?php if($page=='Applications') echo 'class="curent"'?>><span>Applications</span></a></li>
                   <li><a href='../public/index.php?p=contact' <?php if($page=='Contact') echo 'class="curent"'?>><span>Contact</span></a></li>
                </ul>
            </div>
    </header>



<div><?php echo $contenu; ?>

<div>
  <footer>
      <?php echo $footer; ?>
     <br />
     <?php
        if(isset($_SESSION['pseudo'])){
          echo "<a href='../admin/index.php?p=deconnexion'>Déconnexion</a>  <a href='../admin/index.php'>Administration</a>";
        }
        else
          echo "<a href='index.php?p=connexion'>Connexion</a>";
      ?>
  </footer>
</div>

</body>

</html>
