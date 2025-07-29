<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <div class="container-fluid">

     <div class="form ">
            <form action="traitement/tlog.php" method="post" >
            <div class="title"><h1>login</h1></div>
                <div>
                    <h2>Nom</h2>
                    <input type="text" name="nom"placeholder="nom" required>
                </div>

                <div>
                    <h2>votre mot de passe</h2>
                    <input type="password" name="password" placeholder="mdp" required>
                </div>
                
                <div class="bouton">
                    <input type="submit" value="valider">
                </div>  
                <div class="login-link">
            <a href="inscription.php">inscrir</a>
        </div>        
            </form>
        </div>

    </div>
   
</body>

</html>