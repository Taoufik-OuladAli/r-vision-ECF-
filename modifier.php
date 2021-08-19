
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
    <?php require 'header.php' ?>
    <main>
        <div class="wrapper">
            <h2>Modifier un instrument </h2>
            <form action="">
            <div class="formulaire">
                <div>
                    <label for="">Modèle</label>
                    <input type="text" name="modele" id="modele">
                </div>
                <div>
                    <label for="">Marque</label>
                    <input type="text" name="marque" id="marque">
                </div>
                <div>
                    <label for="">Catégorie</label>
                    <input type="text" name="catégorie" id="catégorie">
                </div>
                <div>
                    <label for="">Prix en €</label>
                    <input type="text" name="" id="" min="0">
                </div>
                <div>
                    <label for="">Quantité</label>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">Date</label>
                    <input type="date" name="" id="">
                </div>
            </div>
            <div class="submit">
                <button>Valider</button>
            </div>
            </form>

        </div>
    </main>
</body>

</html>