<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulaire d'adresses</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_addresses = $_POST["num_addresses"];
            if(validationNumber($num_addresses)){
                return true;
            

            }else{
                
            }
        }
    ?>

    <form action="result.php" method="post">
        <!-- repetition des addresses par rapport au nombre entré par l'utilisateur  -->
        <?php
        for ($i = 1; $i <= $num_addresses; $i++) {
        ?>

        <div class="address">
            <label for="street<?= $i ?>">Nom de la rue:</label>
            <input type="text" id="street<?= $i ?>" name="street<?= $i ?>" maxlength="50" required>

            <label for="street_nb<?= $i ?>">Numero de la rue:</label>
            <input type="text" id="street_nb<?= $i ?>" name="street_nb<?= $i ?>" required>

            <label for="type<?= $i ?>">Type d'adresse:</label>
            <select id="type<?= $i ?>" name="type<?= $i ?>" maxlength="20">
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="domicile">Domicile</option>
                <option value="travail">Travail</option>
                <option value="autre">Autre</option>
            </select>

            <label for="city<?= $i ?>">Ville:</label>
            <input type="text" id="city<?= $i ?>" name="city<?= $i ?>" maxlength="50" required>

            <label for="zipcode<?= $i ?>">Code postal:</label>
            <input type="text" id="zipcode<?= $i ?>" name="zipcode<?= $i ?>" maxlength="6" required>
        </div>
        <?php
        }
        ?>
        <button type="submit">Confirmer</button>
    </form>
</body>
</html>
<?php
    require_once("functions.php");
?>