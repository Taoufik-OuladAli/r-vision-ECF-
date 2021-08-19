
<?php

require 'model.php';

$sql = 'SELECT modeles.id, modeles.modele, modeles.prix, modeles.stock, modeles.date_creation, categories.categorie, marques.marque 
FROM modeles 
INNER JOIN categories 
ON categories_id=categories.id 
INNER JOIN marques 
ON marques_id=marques.id
ORDER BY modeles.id DESC';

$q = $bdd->query($sql);
$mon_tableau = $q->fetchAll(PDO::FETCH_ASSOC);



?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <?php require 'header.php' ?>
        <main>
            <div>
                <div>
                    <h2>Liste des instruments </h2>
                </div>


                <div class="but">
                    <button>Categorie</button>
                    <button type="submit"><a href="ajouter.php">Ajouter</a></button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Modele</th>
                            <th>Marque</th>
                            <th>Catégorie</th>
                            <th>Prix en €</th>
                            <th>Stock</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mon_tableau as $ligne) : ?>
                            <tr>
                                <td><?= $ligne['modele'] ?></td>
                                <td><?= $ligne['marque'] ?></td>
                                <td><?= $ligne['categorie'] ?></td>
                                <td><?= $ligne['prix'] ?></td>
                                <td><?= $ligne['stock'] ?></td>
                                <td><?= $ligne['date_creation'] ?></td>
                                <td>
                                    <div class="images">
                                        <a href="modifier.php?id=<?=$ligne['id'] ?>">
                                            <img src="images/modifier.png" alt="">
                                        </a>
                                        <a href="supprimer.php?id=<?=$ligne['id'] ?>">
                                            <img src="images/suprimer.png" alt="">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>

            </div>
        </main>
    </div>
</body>

</html>