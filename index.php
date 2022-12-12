<?php

require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Clean.php';

$products = [
    new Food(new Category('Dog', '<i class="fa-solid fa-shield-dog"></i>'), 'All Breeds', 'Monge', 46, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757252124', 12, 'Dry'),

    new Toy(new Category('Cat', '<i class="fa-solid fa-shield-cat"></i>'), 'SlimCat', 'Croci', 7, 'https://arcaplanet.vtexassets.com/arquivos/ids/258029/GIOCO-GATTO-SLIMCAT-BLU.jpg?v=1757207624', 0.150, 'circle'),

    new Clean(new Category('Cat', '<i class="fa-solid fa-shield-cat"></i>'), 'TripocanClean', 'TropiClean', 13, 'https://arcaplanet.vtexassets.com/arquivos/ids/273387/TROPICLEAN-WATERLESS-CAT-SHAMPOO-ML.220.jpg?v=1756084205', 'Shampoo'),
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Product</title>
</head>
<body>
  
</body>
</html>