<?php


include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT 'het werkt' as nice");

// print_r($result->fetch_all());

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

</head>
<body class="site">
    <?= include "../source/views/header.php" ?>

    <?= include "../source/views/index-section.php" ?>

    <?= include "../source/views/product-pair.php" ?>

    <?= include "../source/views/footer.php" ?>

</body>
</html>
