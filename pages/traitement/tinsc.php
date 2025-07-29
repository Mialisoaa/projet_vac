<?php
require "../../inc/fonction.php";

$nom = $_POST["nom"];
$motdepasse = $_POST["password"];
if (inscription($nom, $motdepasse) != -1) {
    echo "<script>
            alert('inscription ok');
            window.location.href = '../todolist.php';
        </script>";
} else {
    echo "<script>
            alert('inscription non ok');
            window.location.href = '../todolist.php';
        </script>";
}
