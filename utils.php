<?php
    function cnx()
    {
        $res=mysqli_connect("localhost","root","","baselafleur2");
        mysqli_set_charset($res,"utf8");
        return $res;
    }
    Function getTitre($idCateg)
    {
        $connexion=cnx();
        $requete ="select cat_libelle from categorie where cat_code='$idCateg'";
        $resultat=mysqli_query($connexion,$requete);
        $ligne=mysqli_fetch_assoc($resultat);
        return "Société LaFleur-".$ligne['cat_libelle'];
    }
?>