<?php
require "../../inc/fonction.php";

$nom = $_POST["nom"];
$motdepasse = $_POST["password"];


if (connecter($nom, $motdepasse) != -1) {
    session_start();
    $_SESSION["id"] = connecter($nom, $motdepasse);
   echo "<script>
            alert('ok');
            window.location.href = '../todolist.php';
        </script>";
} else {
    echo "<script>
            alert('non');
            window.location.href = '../todolist.php';
        </script>";
}
