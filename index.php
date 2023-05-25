<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox - Détails de l'œuvre</title>
</head>
<body>

        <?php include('header.php'); ?> <!-- Inclusion du header -->

    <main>
            <div id="liste-oeuvres">
                <?php include ('oeuvres.php'); // Inclure le fichier contenant le tableau des œuvres

                foreach ($oeuvres as $oeuvre) {   // Boucle pour afficher les vignettes des œuvres
                ?>
                    <article class="oeuvre">
                        <a href="oeuvre.php?id=<?php echo $oeuvre["id"]; ?>">
                            <img src="<?php echo $oeuvre["image"]; ?>" alt="<?php echo $oeuvre["titre"]; ?>">
                            <h2><?php echo $oeuvre["titre"]; ?></h2>
                            <p class="description"><?php echo $oeuvre["description"]; ?></p>
                        </a>
                    </article>
                <?php
                }
                ?>
            </div>
    </main>

        <?php include('footer.php'); ?> <!-- Inclusion du footer -->

</body>
</html>