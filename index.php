<?php
require_once __DIR__ . '/model/Categories.php';
require_once __DIR__ . '/model/Cats.php';
require_once __DIR__ . '/model/Dogs.php';
require_once __DIR__ . '/model/Foods.php';
require_once __DIR__ . '/model/Games.php';
require_once __DIR__ . '/model/Kennels.php';
require_once __DIR__ . '/model/Kennels.php';
require_once __DIR__ . '/data/Db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-NEGOZIO-ANIMALI</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <h1 class="mt-4 mb-4 text-center ">ANIMAL SHOP</h1>

    <div class="row">
        <?php foreach ($db as $prodotto): ?>
            <div class="col-md-6">
                <div class="card mt-3">
                <img src="<?php echo $prodotto->image; ?>" class="card-img-top" alt="<?php echo $prodotto->title; ?> " style="height: 350px;" >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotto->title; ?></h5>
                        <p class="card-text">Descrizione: <?php echo $prodotto->description; ?></p>
                        <p class="card-text">Prezzo: <?php echo $prodotto->price; ?></p>
                        <p class="card-text">Categoria: <?php echo $prodotto->categories->getCategories(); ?></p>
                        <?php if ($prodotto instanceof Foods): ?>
                            <p class="card-text">Tipo: <?php echo $prodotto->getTipo(); ?></p>
                        <?php elseif ($prodotto instanceof Games): ?>
                            <p class="card-text">Materiale: <?php echo $prodotto->getMateriale(); ?></p>
                        <?php elseif ($prodotto instanceof Kennels): ?>
                            <p class="card-text">Dimensioni: <?php echo $prodotto->getDimensioni(); ?></p>
                        <?php endif; ?>


                        <!-- Aggiunta dell'icona in base alla categoria -->
                        <?php if ($prodotto->categories->getCategories() === 'Cani'): ?>
                    <p><i class="fa-solid fa-dog fs-2"></i></p>
                <?php elseif ($prodotto->categories->getCategories() === 'Gatti'): ?>
                    <p><i class="fa-solid fa-cat fs-2"></i></p>
                <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
