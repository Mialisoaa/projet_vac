<?php
require "connect.php";


function connecter($nom, $motdepasse)
{
    if (empty($nom) || empty($motdepasse)) {
        return -1;
    }
    $sql = "SELECT id FROM membre WHERE  nom = '$nom' and mdp = '$motdepasse'";
    $result = mysqli_query(dbconnect(), $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user['id'];
    }

    return -1;
}


function inscription($nom, $motdepasse)
{
    if (empty($nom) || empty($motdepasse)||connecter($nom, $motdepasse)!=-1) {
        return -1;
    }

    $sql = "INSERT INTO membre (nom, mdp) VALUES ('$nom', '$motdepasse')";


    if (mysqli_query(dbconnect(), $sql)) {
        return mysqli_insert_id(dbconnect());
    } else {
        return -1;
    }
}
