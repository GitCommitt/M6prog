<?php

include_once("../source/dataclasses/mydb.php");

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

    <div class="form-user_login">
        <h2 class="form-user_login-h2">username:</h2>
        <textarea id="username"></textarea>

        <h2 class="form-user_login-h2">password:</h2>
        <textarea id="password"></textarea>

        <button onclick="login()" class="form-user_login-button">Submit</button>
    </div>

    <section class="login-results"></section>

    <script src="./assets/js/main.js"></script>

</body>
</html>