<?php
require 'model.php';

if (isset($_POST['modele'], $_POST['marque'], $_POST['categorie'], $_POST['prix'], $_POST['stock'])) {

    $sql = 'INSERT INTO `modeles` ( `modele`, `prix`, `stock`, `categories_id`, `marques_id`) VALUES (:modele, :prix, :stock, :categorie, :marque) ';
    $q = $bdd->prepare($sql);
    $q->execute(array(
        'modele' => $_POST['modele'],
        'prix' => $_POST['prix'],
        'stock' => $_POST['stock'],
        'categorie' => $_POST['categorie'],
        'marque' => $_POST['marque']
    ));
    header('Location: index.php');
}

$sql = 'SELECT marques.id, marques.marque FROM marques';
$q = $bdd->query($sql);
$marques = $q->fetchAll(PDO::FETCH_ASSOC);

$sql = 'SELECT categories.id, categories.categorie FROM categories';
$q = $bdd->query($sql);
$categories = $q->fetchAll(PDO::FETCH_ASSOC);

?>


<?php require 'header.php'; ?>

<div class="wrapper">
    <h2>Ajouter un instrument</h2>
    <form action="ajouter.php" method="post">
        <div class="formulaire">
            <div class="field">
                <label for="modele">Modèle</label>
                <input type="text" id="modele" name='modele'>
            </div>
            <div class="field">
                <label for="marque">Marque </label>

                <select id="marque" name="marque">
                    <?php foreach ($marques as $marque) : ?>
                        <option value="<?= $marque['id'] ?>"><?= $marque['marque'] ?></option>

                    <?php endforeach; ?>

                </select>
            </div>
            <div class="field">
                <label for="categorie">categorie </label>

                <select id="categorie" name="categorie">
                    <?php foreach ($categories as $categorie) : ?>
                        <option value="<?= $categorie['id'] ?>"><?= $categorie['categorie'] ?></option>
                    <?php endforeach; ?>

                </select>
            </div>


            <div class="field">
                <label for="prix">Prix</label>
                <input type="number" min="0" id="prix" name='prix'>
            </div>

            <div class="field">
                <label for="stock">Stock</label>
                <input type="number" min="0" id="stock" name='stock'>
            </div>
        </div>
        <div class="submit">
            <button>Valider</button>
        </div>

    </form>
</div>
</body>

</html>