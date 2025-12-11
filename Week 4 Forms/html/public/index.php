<?php


include_once("../source/database.php");
include_once("../source/dataclasses/formsdb.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
        <h1>Form</h1>
    <form method="post" action="">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" required>

        <label for="text">Bericht</label>
        <input type="text" id="text" name="text" required>

        <button type="submit"></button>
    </form>

    <?php foreach (bericht::GetAllBerichten($connection) as $bericht)
   {
    include "../source/views/bericht.php";
    }
    ?>
    

</body>
</html>
