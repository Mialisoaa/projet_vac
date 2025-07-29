<?php
require "../../inc/fonction.php";

$nom = $_POST["nom"];
$motdepasse = $_POST["password"];

echo $nom;
echo $motdepasse;
if (connecter($nom, $motdepasse) != -1) {
    echo "<script>alert('okok');</script>";
    session_start();
    $_SESSION["id"] = connecter($nom, $motdepasse);
    echo "<script> window.location.href = 'todolist.php';</script>";
} else {
    echo "<script>alert('non');</script>";
}
