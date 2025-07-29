<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script crc="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>incription</title>
</head>
<body>
    
    <div class="container-fluid">
    
     <div class="form ">
            <form action="traitement/tinsc.php" method="post">
            <div class="title"><h1>inscription</h1></div>
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
                <div class="login-link">
            <a href="login.php">Login</a>
        </div>      
            </form>
        </div>
       
</html>