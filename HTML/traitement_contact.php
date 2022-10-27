<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="styl.css">
  <title>Document</title>
</head>
<body>
<h1>Contacts</h1>
        <div class="container">
        <!-- TABLE CONSTRUCTION -->
        <table class="table table-hover table-dark">
            <thead class="thead-dark">
                <tr>                    
                    <th scope="col"> Nom </th>
                    <th scope="col"> Prenom </th>
                    <th scope="col"> Telephone </th>
                    <th scope="col"> Mail </th>
                </tr>
            </thead>
<?php
  $host = 'localhost';
  $dbname = 'formulaire_3.0';
  $user = 'root';
  $pass = 'root';
  $dbco = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  
    
  $requette = $dbco ->query('SELECT * FROM clients');
    while ($username = $requette-> fetch(PDO::FETCH_ASSOC)) {
        ?>
        <td><?php echo $username['Nom']; ?>   </td>
        <td><?php echo $username['Prenom']; ?></td>
        <td><?php echo $username['Tel']; ?>   </td>
        <td><?php echo $username['Mail']; ?>  </td>


        <?php
}
?>
</body>
</html>