<?php


include_once("../source/views/header-data.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="./assets/css/styles.css" />
<style>

</style>
</head>
<body class="body-login">
    <?= include "../source/views/header.php" ?>


    

<div class="login-card">
    <h1>Login</h1>

    <label for="username">Username</label>
    <input type="text" id="username">

    <label for="password">Password</label>
    <input type="password" id="password">

    <button onclick="login()">Inloggen</button>

    <section class="login-results"></section>
</div>

<?= include "../source/views/footer.php" ?>

<script src="./assets/js/main.js"></script>

</body>
</html>
