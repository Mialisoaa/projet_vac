<?php
require "../../inc/fonction.php";

$nom=$_POST["nom"];
$motdepasse=$_POST["password"];
if ( inscription($nom, $motdepasse)!=-1) {
   echo "<script>inscription ok</script>";
}