
<?php
        session_start();
        if(!isset($_SESSION["reference"]))
        {
                $_SESSION["reference"]=array();
                $_SESSION["quantite"]=array();
        }
?>
<div class="page"> 
<?php
        include("utils.php");
        $connexion=cnx();
        $requete="select * from categorie";
        echo '<div class="menu" height="100%">';
        echo '<h1><strong>Société Lafleur.</strong></h1><br />';   
        echo '<section class="acc"></li><a href="accueil.php">Accueil<br /></a></li>';
        echo '<a href="mailto:commercial@lafleur.com">Nous écrire</a>';
        echo '<hr>';
        $resultat=mysqli_query($connexion,$requete);
        $ligne=mysqli_fetch_assoc($resultat);
        while($ligne)
         { 
            echo '<li><a href="listPdt.php?categ='.$ligne["cat_code"].'">'.$ligne["cat_libelle"].'</a></li><br />';
            $ligne=mysqli_fetch_assoc($resultat);

         }
         echo '<hr>';
         echo '<form action="panier.php" method="get">'
                
                '<input type="submit" name="action" value="Vider le panier":> </form>';
         echo '<form action="commande.php" method="get">
                <input type="submit" name="action" value="Commander":></form>';
        echo '<div class="vl"></div>';
        echo '</div>';
?>
</div> 
