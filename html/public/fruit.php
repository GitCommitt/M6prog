<?php


include_once("../source/views/header-data.php");

?>


<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GroenLokaal — De groenteboer</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

  <?php include_once "../source/dataclasses/groenekistdb.php"?>

</head>
<body class="site">
    <?= include "../source/views/header.php" ?>


    <?= include "../source/views/footer.php" ?>

    <h1>Ons Fruit</h1>
    <section class="products">
    <?php
    foreach (Product::GetProductsByCategory($connection, 'fruit') as $product)
   {
    include "../source/views/product-pair.php";
    }
    ?>
    </section>
    

</body>
</html>
