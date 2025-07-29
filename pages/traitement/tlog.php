<?php
require "../../inc/fonction.php";

$nom=$_POST["nom"];
$motdepasse=$_POST["password"];
if ( connecter($nom, $motdepasse)!=-1) {
   echo "<script>okok</script>";
}