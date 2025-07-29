<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script crc="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>login</title>
</head>
<body>
    <div class="container-fluid">

     <div class="form ">
            <form action="traitement/tlog.php" method="post" >
              
                <div>
                    <h2>Nom</h2>
                    <input type="text" name="nom"placeholder="nom">
                </div>

                <div>
                    <h2>votre mot de passe</h2>
                    <input type="password" name="password" placeholder="mdp">
                </div>
                
                <div class="bouton">
                    <input type="submit" value="valider">
                </div>          
            </form>
        </div>

    </div>
     <a href="inscription.php">inscrir</a>
</body>

</html>