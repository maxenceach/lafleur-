<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Lafleur</title>
    <meta name="description" content="Premiere page web" />
    <meta http-equiv="content-type" content="text/html ; charset=utf-8" />
    <meta http-equiv="content-Language" content="fr" />
</head>

<body>
<div class="page"> 
    <?php
        include_once("menu.php");
        echo '<div class="accueil">';
        echo '<h1><strong>"Dites-le avec Lafleur."</strong></h1>';
        echo '<img src="/Achille/Lafleur/Images/ACCUEIL.jpg" alt="Accueil"/>';
        echo '<p>Constituez votre panier en naviguant, puiscliquez sur "Commander".</p>' ;
        echo '<hr>';
        echo '<p>Vous devez etre recensé comme client pour pouvoir commander.';
        echo '<p>Envoyez un mail en laissant vos coordonnées pour etre contacté per notre service commercial.';
        echo '<hr>';
        echo '</div>';
    ?>
</div>
</body>
</html>