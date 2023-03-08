<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto/Prodotto.php';
require_once __DIR__ . '/Models/Prodotto/Cibo.php';
require_once __DIR__ . '/Models/Prodotto/Gioco.php';
require_once __DIR__ . '/Models/Prodotto/Cuccia.php';

$categoriaCani = new Categoria('🐶', 'Cani');
$categoriaGatti = new Categoria('😼', 'Gatti');

$prodotti = [];

$prodotti[] = new Cibo($categoriaGatti, 'Whiskas 1+ lattine 24 x 400 g', 'Alimento umido per gatti adulti, con carne fresca, del tutto privo di coloranti e aromi artificiali, senza zuccheri aggiunti, in tante prelibate varianti - in conveniente set risparmio da 24 x 400 g', 173, 'https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/3/400/cans_24_1000x1000_3.jpg', 2.99, 24, '30/08/2023');
$prodotti[] = new Gioco($categoriaCani, 'Giocattolo KONG Goodie Bone S', 'Gioco KONG Goodie Bone, osso in caucciù naturale da masticare per cani fino a 9 kg, materiale robusto per un passatempo che dura a lungo, con Goodie Grippers™ alle due estremità da riempire con snack.', 112, 'https://shop-cdn-m.mediazs.com/bilder/kong/goodie/bone/s/2/400/219797_kong_goodie_bone_hs_04_2.jpg', 5.69, 18, 'Gomma');
// $prodotti[] = new Cuccia($categoriaCani, 'Cuccia per cani Spike Classic', ' Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. Piedini regolabili in altezza, ideale in caso di pioggia, facile da montare.', 298, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg', 27.89, 3, 'Cane Adulto');
$prodotto5 = $prodotti[] = new Cuccia($categoriaCani, 'Cuccia per cani Spike Classic', ' Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. Piedini regolabili in altezza, ideale in caso di pioggia, facile da montare.', 298, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg', 27.89, 3, 'Cane Adulto');

try {
    $prodotto5->acquista(1);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Zoolean</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <main>
        <div class="container">

            <div class="row">
                <div class="col mt-5">
                    <h1 class="text-center mb-5">Zoolean Shop</h1>
                </div>
            </div>

            <div class="row">

                <?php
                foreach ($prodotti as $index => $prodotto) {
                ?>

                    <div class="col-4">

                        <div class="card my-3">

                            <img src="<?php echo $prodotto->immagine; ?>" alt="">

                            <div class="card-body">

                                <div class="product-name d-flex justify-content-between">
                                    <h5><?php echo $prodotto->nome; ?></h5>
                                    <h6 class="text-end">Codice prodotto: #<?php echo $prodotto->codice; ?></h6>
                                </div>

                                <h6><?php echo $prodotto->categoria->icona ?> <?php echo $prodotto->categoria->nome ?></h6>

                                <p class="text-secondary"><?php echo $prodotto->descrizione; ?></p>

                                <div class="product-name d-flex justify-content-between">
                                    <div class="text-success">€ <?php echo $prodotto->prezzo; ?></div>
                                </div>
                                <?php
                                if (is_a($prodotto, 'Cibo')) {
                                ?>
                                    <div class="text-secondary">Scadenza: <?php echo $prodotto->scadenza; ?></div>
                                <?php
                                }
                                ?>
                                <?php
                                if (is_a($prodotto, 'Gioco')) {
                                ?>
                                    <div class="text-secondary">Materiale: <?php echo $prodotto->materiale; ?></div>
                                <?php
                                }
                                ?>
                                <?php
                                if (is_a($prodotto, 'Cuccia')) {
                                ?>
                                    <div class="text-secondary">Taglia: <?php echo $prodotto->taglia; ?></div>
                                <?php
                                }
                                ?>
                                <div class="text-danger">Scorte rimaste: <?php echo $prodotto->n_scorte; ?></div>

                                <div class="d-flex align-items-center mt-2 justify-content-between">
                                    <div class="review">Voto medio recensioni: <?php echo $prodotto->stampVoto(4) ?></div>
                                    <a href="#" class="btn btn-primary">Vedi il prodotto</a>
                                </div>
                            </div>

                        </div>

                    </div>

                <?php
                }
                ?>

            </div>
        </div>
    </main>

</body>

</html>

<!-- oggi continuate a lavorare nella stessa repo di ieri aggiungendo almeno un trait ed un exception al vostro shop! -->