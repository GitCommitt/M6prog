<?php


include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT 'het werkt' as nice");

print_r($result->fetch_all());

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

    <section class="messages">
    <div class="message">
        <div class="name">Daan</div>
        <div class="text">Dit is mijn eerste bericht.</div>
    </div>

</body>
</html>
