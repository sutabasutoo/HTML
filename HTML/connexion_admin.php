<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="sty.css">
    <title>Document</title>
</head>
<body>
    

<?php 
    include("bdd.php");

    session_start();
    
    $_SESSION["connected"]=FALSE;
    
    
    
    if($_POST){
        $pseudo = $_POST ["pseudo"];
        $password = $_POST ["password"];
    
        $sql = $dbco->query("SELECT * FROM `admin`");
        while ($user = $sql-> fetch(PDO::FETCH_ASSOC)) {
            if ($user['Name'] == $pseudo && $user['Password'] == $password) {
                $_SESSION['connected'] = TRUE;    
                header("Location: test.php");
                exit;
            }
        }
    }
?>
<div class="container">
<h1>Admin</h1>
<form action="" method="post">
       pseudo:     <input type="text" name="pseudo" class="input"/>
        <br>
        <br>
        password :     <input type="password" name="password" />
        <br>
        <br>
        <input type="submit" name="submit" /> 
</from>
</div>
</body>
</html>