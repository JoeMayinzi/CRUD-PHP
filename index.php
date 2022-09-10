<?php
    require "connect.php";
    
    $select = "SELECT * FROM `eleves`";
    $query = $dataBase->query($select);
    //$execute = $prepare->execute();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/styles/style.css" />
    
    <title>Liste des etudiants</title>
  </head>
  <body>
    <div>
        <table class="fl-tabl">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prenom</th>
                    <th>Mah</th>
                    <th>Anglais</th>
                    <th>Economie</th>
                    <th>Informatique</th>
                    <th>Psychologie</th>
                    <th>Biologie</th>
                </tr>
            </thead>
            <tbody>
        
                <?php while($eleves = $query->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td> <?php echo $eleves['id']; ?> </td>
                        <td> <?php echo $eleves['nom']; ?> </td>
                        <td> <?php echo $eleves['postnom']; ?> </td>
                        <td> <?php echo $eleves['prenom']; ?> </td>
                        <td> <?php echo $eleves['math']; ?> </td>
                        <td> <?php echo $eleves['anglais']; ?> </td>
                        <td> <?php echo $eleves['economie']; ?> </td>
                        <td> <?php echo $eleves['informatique']; ?> </td>
                        <td> <?php echo $eleves['psychologie']; ?> </td>
                        <td> <?php echo $eleves['biologie']; ?> </td>
                    </tr>
                <?php endwhile ?>     
            
            </tbody>
        </table> 
    </div>
  </body>
</html>
