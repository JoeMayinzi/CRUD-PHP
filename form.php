<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de données</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <div class="nom">
            <label for="nom">Nom</label>
           <input type="text"  name="nom"> 
        </div>
        <div class="postnom">
            <label for="postnom">Postnom</label>
           <input type="text"  name="postnom"> 
        </div>
        <div class="prenom">
            <label for="prenom">Prenom</label>
           <input type="text"  name="prenom"> 
        </div>
        <div class="math">
            <label for="math">Math</label>
           <input type="text"  name="math"> 
        </div>
        <div class="anglais">
            <label for="anglais">Anglais</label>
           <input type="text"  name="anglais"> 
        </div>
        <div class="economie">
            <label for="economie">Economie</label>
           <input type="text"  name="economie"> 
        </div>
        <div class="informatique">
            <label for="informatique">informatique</label>
           <input type="text"  name="informatique"> 
        </div>
        <div class="psychologie">
            <label for="psychologie">psychologie</label>
           <input type="text"  name="psychologie"> 
        </div>
        <div class="biologie">
            <label for="biologie">psychologie</label>
           <input type="text"  name="biologie"> 
        </div>
        <button type="submit" name="btn">Enregister</button>
    </form>
</body>
</html>