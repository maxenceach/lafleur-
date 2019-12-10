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
    include_once("menu.php") ;


    // $_SESSION["reference"]=array();
    // $_SESSION["quantite"]=array();

    $connexion=cnx();
    if($connexion)
    $positionproduit=array_search($_SESSION["reference"],$_SESSION["quantite"]);
{
    $i=count($_SESSION["reference"]);
    $_SESSION["reference"][$i]=$_GET["refPdt"];
    $_SESSION["quantite"][$i]=$_GET["quantite"];
    echo '<table border="1px">';
    echo '<tr>';
    echo '<td>Référence</td>';
    echo '<td>Quantité</td>';
    echo '</tr>';
    for ($j = 0; $j < $i; $j++)
    {
        echo '<tr>';
        echo '<td>'.$_SESSION["reference"][$j].'</td>';
        echo '<td>'.$_SESSION["quantite"][$j].'</td>';
        echo '</tr>';
    }
    
   echo '</table>';
}

?>
</body>
</html>
 

