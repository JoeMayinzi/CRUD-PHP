<?php
    require "connect.php";

    $id = $_POST['id'];

    if (!empty($_POST)) {
        if (!empty($id)) {
            $delete = "DELETE FROM `eleves` WHERE `id` = '$id'";
            $prepare = $dataBase->prepare($delete);
            $execute = $prepare->execute();

            if ($execute) {
                echo "Vous avez supprimer un eleve";
            } else {
                echo "Suppression échoué";
            }
        } else {
            echo"Veillez saisir le champ";
        }
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="id" placeholder="Entrez l'identifiant de l'eleve à supprimer">
        <button type="submit" name="btn">Supprimer</button>
    </form>
</body>
</html>