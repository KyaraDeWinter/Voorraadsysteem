<?php
    require_once('classes/product/product.php');
    require_once('classes/dvd/dvd.php');
    require_once('classes/cd/cd.php');

    $product1 = new DVD(2, 'BTS Memories', 12, 3, 35, 'Actief', DVD::Lengte(135), 2021, 'HYBE');
    $product2 = new CD(3, 'Post Human: Survival Horror', 12, 3, 15, 'Actief', 'Bring Me The Horizon', 9, 'Sony Music');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Voorraadsysteem</title>
  </head>
  <body>
    <h1>Voorraadsysteem</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                <?php echo $product1; ?>
            </p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                <?php echo $product2; ?>
            </p>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

