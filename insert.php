<?php
    require "connect.php";
    // Recuper les valeurs et on enleve les entités html
    
    $nom = htmlspecialchars($_POST['nom']);
    $postnom = htmlspecialchars($_POST['postnom']);
    $prenom = htmlspecialchars($_POST['postnom']);
    $math = htmlspecialchars($_POST['math']);
    $anglais = htmlspecialchars($_POST['anglais']);
    $economie = htmlspecialchars($_POST['economie']);
    $informatique = htmlspecialchars($_POST['informatique']);
    $psychologie = htmlspecialchars($_POST['psychologie']);
    $biologie = htmlspecialchars($_POST['biologie']);

    // On fais le traitement de formulaire

    if(!empty($_POST)) {
        if(!empty($nom) && !empty($postnom) && !empty($prenom) && !empty($math) && !empty($anglais) && !empty($economie)
        && !empty($informatique) && !empty($psychologie) && !empty($psychologie)) {
            $nom = strip_tags($_POST['nom']);
            $postnom = strip_tags($_POST['postnom']);
            $prenom= strip_tags($_POST['prenom']);
            $math= strip_tags($_POST['math']);
            $anglais = strip_tags($_POST['anglais']);
            $economie = strip_tags($_POST['economie']);
            $informatique = strip_tags($_POST['informatique']);
            $psychologie = strip_tags($_POST['psychologie']);
            $biologie = strip_tags($_POST['biologie']);

            // LA requete SQL permettant d'inserer les données
            $insert = "INSERT INTO `eleves`(`nom`, `postnom`, `prenom`, `math`, `anglais`, `economie`, `informatique`, `psychologie`, `biologie`)
            VALUES(:nom, :postnom, :prenom, :math, :anglais, :economie, :informatique, :psychologie, :biologie)";

            //Preparation de la requete
            $prepare = $dataBase->prepare($insert);

            //Execution de la requetet et passage des informations
            $execute = $prepare->execute(array(":nom"=>$nom, ":postnom"=>$postnom, ":prenom"=>$prenom, ":math"=>$math,
            ":anglais"=>$anglais, ":economie"=>$economie, ":informatique"=>$informatique, "psychologie"=>$psychologie, ":biologie"=>$biologie));

            if ($execute) {
                echo "Vous avez ajouté un enregistrement dans la base de données";
            }
        } else {
            echo "Veillez remplir tous les champs";
        }
    }
?>