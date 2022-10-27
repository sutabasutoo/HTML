<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="styles.css">
    <title>Formulaire</title>
</head>   
<body class="body">
<html>
<div class="container">
    <h1>Formulaire de contact</h1>
    <form action="" method="post">
       Nom :     <input type="text" name="nom" class="input"/>
        <br>
        <br>
        Prenom :     <input type="text" name="prenom" />
        <br>
        <br>
        téléphone : <input type="text" name="tel"  minlength="10"/>
        <br>
        <br>
        mail : <input type="text" name="mail"/>
        <br>
        <br>
        <input type="submit" name="submit" /> 
        
        <a class="nav-link" href="http://localhost/php/connection_admin.php">admin</a>

    </form>
</div>
<?php
            $servname = 'localhost';
            $dbname = 'formulaire_3.0';
            $user = 'root';
            $pass = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE IF NOT EXISTS Clients(
                        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        Nom VARCHAR(30) NOT NULL,
                        tel VARCHAR(30) NOT NULL,
                        Prenom VARCHAR(30) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
                        DateInscription TIMESTAMP
                        )";
                
                $dbco->exec($sql);
                // echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>


<?php 


if($_POST){
   $nom = $_POST ["nom"];
    $mail = $_POST ["mail"];
$prenom = $_POST ["prenom"];
$tel = $_POST ["tel"];

   $sql = $dbco -> exec("INSERT INTO clients (nom, mail, prenom, tel)
   VALUES('$nom', '$mail', '$prenom', '$tel')");
}

?>
</body>
</html>
<?php
            $servname = 'localhost';
            $dbname = 'formulaire_3.0';
            $user = 'root';
            $pass = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE IF NOT EXISTS Clients(
                        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        Nom VARCHAR(30) NOT NULL,
                        tel VARCHAR(30) NOT NULL,
                        Prenom VARCHAR(30) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
                        DateInscription TIMESTAMP
                        )";
                
                $dbco->exec($sql);
                // echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>


<?php 


if($_POST){
   $nom = $_POST ["nom"];
    $mail = $_POST ["mail"];
$prenom = $_POST ["prenom"];
$tel = $_POST ["tel"];

   $sql = $dbco -> exec("INSERT INTO clients (nom, mail, prenom, tel)
   VALUES('$nom', '$mail', '$prenom', '$tel')");
}

?>
</body>
</html>