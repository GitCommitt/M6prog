<?php


include_once("../source/views/header-data.php");


  $query = 
  ' SELECT *  from product';

  $stmt = $connection->prepare($query);
  $stmt->execute();
  

  $result = $stmt->get_result();
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

    <?= include "../source/views/product-pair.php" ?>

    <?= include "../source/views/footer.php" ?>

    <?php
    while ($row = mysqli_fetch_assoc($result)){
        $product = new Product(
            $row['idproduct'],
            $row['name'],
            $row['description'],
            $row['price'],
            $row['stock'],
            $row['product_img_idproduct_img'],
            $row['product_categorie_idproduct_categorie']
        );?>
        <section>
        <h2><?=$row["name"]?></h2>
        </section>
    <?php
    }
    ?>
    

</body>
</html>
